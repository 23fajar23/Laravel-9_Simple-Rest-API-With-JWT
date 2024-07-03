<p align="center">

<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"> 
    
## ✨ ~ Simple Rest API with JWT authentication  ~ ✨

</p>

✨ 👋 Hi Everyone 👋 ✨

Here I will share a Laravel project, where this project only contains the REST API. This project is suitable for those of you who want to start learning the backend or creating a REST API in Laravel. I use Laravel 9 in this project where we will use a token to carry out the authentication process.

## Step after your clone this project :

-   copy file .env.example and rename to .env
-   create new database with name "laravel"
-   open terminal and go to directory project
-   then run command "composer install"
-   run command "php artisan migrate:refresh --seed"
-   final step you can run command "php artisan serve" for run this project

## Authentication Register :

> You must register first if you don't have an account, just enter your email and password.

    Email => tokoweb@gmail.com
    Password => tokoweb

## Authentication Login :

> If you already have an account, you can just log in directly by entering a valid email and password.

    Email => tokoweb@gmail.com
    Password => tokoweb

> Then you will get a response containing your data along with a token that you can use to access the data on the rest API later. (example)

    {
        "status": "success",
        "user": {
            "id": 1,
            "name": "",
            "email": "tokoweb@gmail.com",
            "email_verified_at": null,
            "created_at": "2024-07-03T09:10:38.000000Z",
            "updated_at": "2024-07-03T09:10:38.000000Z"
        },
        "authorization": {
            "token": "eyJ0eXAivsr14frbzxJD3BJm1HIGZ4i-i0L6qccKM_XNvBuOjdU....",
            "type": "bearer"
        }
    }

## Documentation :

You can use the token you have obtained to access various APIs that have been provided. If you want to try various other APIs, you can visit my POSTMAN documentation link below :

    https://www.postman.com/universal-equinox-683971/workspace/fajar-workspace/globals

## Step after your visit link postman :

-   open the Collections section then register first then log in
-   After that you can test other rest apis, because the token after we log in has been stored in the global environment so we don't need to enter a token every time we want to test another rest api.

<br>
In this project I have also provided some dummy data in the seeder section in Laravel. Those are some previews of what this project is like, hopefully this project can help you. 😄🙏✨<br>
See you next time.. ✌✌

<br> 
#PHP
#MySql
#Laravel9 
#REST API
#CRUD
#SimpleProject
