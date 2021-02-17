## Installation

Open yout cmd and enter the code below 

```bash
git clone https://github.com/eremodev/namedays-app.git YOUR_FOLDER_NAME
```

Go to your created folder

```bash
cd /your_folder_name/
```

In cmd and run command

```bash
composer update
```

Rename ".env.example to .env" and run command

```bash
php artisan key:generate
```

Open ".env", modify the database connection and run command

```bash
php artisan migrate
```

After importing the files into the database run command for Download/Update data

```bash
php artisan name-days:update
```

Now run command below open browser and enjoy the app 

```bash
php artisan serve
```

<img src="https://readme.eremo.site/img/homepage.png" width="400">

<img src="https://readme.eremo.site/img/homepage-search.png" width="400">

<img src="https://readme.eremo.site/img/nameday-show.png" width="400">