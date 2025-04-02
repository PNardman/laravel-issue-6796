# Reproducing Repository for https://github.com/laravel/nova-issues/issues/6797
The app contains basic user registration and 2FA. 
I added a custom step in the authentication pipeline that exists the application BEFORE reaching the 2FA screen. 
When this point is reached, we know that everything is working as expected. 

App is hosted at localhost:8000 

# Setup the app with artisan

1. `composer install`
4. `npm install && npm run build`
5. `php artisan migrate`
6. `php artisan serve`
7. `npm run dev` 

# Setup app with octane (using laravel sail)

1. Make sure artisan is not running any more.
2. run `./vendor/bin/sail build --no-cache` and wait for the images to build
3. `./vendor/bin/sail up -d`
4. `./vendor/bin/sail up -d`

# App walthrough without octane

1. Create a user by registering
2. Enable two factor authentication
3. log out
4. log in with your credentials
5. you should see a blank screen with a message specifying that the customized pipeline is used, this is expected behavior and works normally when just serving the request. 

# App walkthrough with octane
1. (optional) create a user if not already done before
2. log in with your user credentials
3. normal 2FA screen gets shown and custom login pipeline gets skipped. 
