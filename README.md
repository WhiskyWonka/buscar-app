# ![Laravel ¿Dónde esta mi cosa? App](logo.png)

> ### Example Laravel codebase containing real world examples (CRUD, auth, advanced patterns and more) that adheres to the [RealWorld](https://github.com/gothinkster/realworld-example-apps) spec and API.

---

# Getting started

## Installation

Clone the repository

    git clone https://github.com/WhiskyWonka/buscar-app.git

Switch to the repo folder

    cd buscar-app

pre-requisites: docker desktop

Execute the docker command for executing Laravel sail

    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v $(pwd):/var/www/html \
        -w /var/www/html \
        laravelsail/php81-composer:latest \
        composer install --ignore-platform-reqs

Run the container with sail

    ./vendor/bin/sail up -d

Create database

    touch database/database.sqlite

Create env file

    cp .env.example .env

Configure application (.env)

```ini
...
DB_CONNECTION=sqlite
# DB_HOST=mysql
# DB_PORT=3306
# DB_DATABASE=testing
# DB_USERNAME=sail
# DB_PASSWORD=password
...
```

### Configure phpunit (phpunit.xml)

```xml
...
<env name="DB_DATABASE" value=":memory:"/>
...
```

Run migrations

    sail artisan migrate

Run seeders

    sail artisan db:seed

---
### Install node modules
    npm install --devop´

### Activate Husky Hooks
    npx husky install
    


API documentation

    http://localhost/api/documentation

---

API: run test

    sail test

## Folders

-   `app` - Contains all the Eloquent models
-   `app/Http/Controllers/Api` - Contains all the api controllers
-   `app/Http/Middleware` - Contains the JWT auth middleware
-   `app/Http/Requests/Api` - Contains all the api form requests
-   `app/RealWorld/Favorite` - Contains the files implementing the favorite feature
-   `app/RealWorld/Filters` - Contains the query filters used for filtering api requests
-   `app/RealWorld/Follow` - Contains the files implementing the follow feature
-   `app/RealWorld/Paginate` - Contains the pagination class used to paginate the result
-   `app/RealWorld/Slug` - Contains the files implementing slugs to articles
-   `app/RealWorld/Transformers` - Contains all the data transformers
-   `config` - Contains all the application configuration files
-   `database/factories` - Contains the model factory for all the models
-   `database/migrations` - Contains all the database migrations
-   `database/seeds` - Contains the database seeder
-   `routes` - Contains all the api routes defined in api.php file
-   `tests` - Contains all the application tests
-   `tests/Feature/Api` - Contains all the api tests
