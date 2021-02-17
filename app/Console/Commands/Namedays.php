<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Nameday;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\GuzzleHttp;
use GuzzleHttp\Client;

class Namedays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'name-days:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download or Update namedays table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client(['base_uri' => 'https://api.eremo.site/json/meniny.json']);
        $response = $client->request('GET');
        $mydata = json_decode($response->getBody()->getContents(), true);

        foreach ($mydata['namedays'] as $data) {
            Nameday::updateOrCreate([
                'month' => $data['month'],
                'date' => $data['date'],
                'name' => $data['name'],
            ]);
        }
    }
}
