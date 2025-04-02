# Reproducing Repository for [laravel/nova-issues#6797](https://github.com/laravel/nova-issues/issues/6797)

This app contains basic user registration and two-factor authentication (2FA).  
A custom step has been added to the authentication pipeline that exits the application **before** reaching the 2FA screen.  
When this point is reached, it indicates that everything is working as expected.

The app is hosted at `localhost:8000`.

---

### ⚙️ Setup the App with Artisan

1. `composer install`  
2. `npm install && npm run build`  
3. `php artisan migrate`  
4. `php artisan serve`  
5. `npm run dev`

---


### 🧪 App Walkthrough without Octane

1. Register to create a user.  
2. Enable two-factor authentication.  
3. Log out.  
4. Log in with your credentials.  
5. You should see a blank screen with a message indicating that the customized pipeline is used. The application dies.  
   *This is expected behavior and works correctly when the request is served normally.* I added this so you can immediately see that custom behavior gets skipped on octane. 
---

### ⚡ Setup the App with Octane (Using Laravel Sail)

1. Make sure Artisan is not running and you disabled `npm run dev` as well and you have docker running.  
2. Run `./vendor/bin/sail build --no-cache` and wait for the images to build.  
3. Run `./vendor/bin/sail up -d`.
4. Run `npm run dev` again  


---

### 🧪 App Walkthrough with Octane

1. *(Optional)* Create a user if you haven’t already.  
2. Log in with your credentials.  
3. The normal 2FA screen will appear, and the custom login pipeline will be skipped. This is *incorrect*!
