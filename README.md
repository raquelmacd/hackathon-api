## API Hackathon

### How to execute?
1. First, you need **Docker** and **Docker Compose** in your machine.

2. Clone repo
```sh
git clone https://github.com/mrbrunelli/hackathon-api.git
```

3. After repo cloned, enter in project folder
```sh
cd ./hackathon-api
```

4. Start containers
```sh
docker-compose up -d
```

5. Install composer dependencies
```sh
docker container exec -u 1000 laravel composer install
```

6. Access application on
```sh
http://localhost:8085/
```

7. Need drops your containers?
```sh
docker-compose down
```

### How to execute migrations?
1. Install migrations
```sh
docker container exec -it -u 1000 laravel php artisan migrate:install
```

2. Create new migration
```sh
docker container exec -u 1000 laravel php artisan make:migration create_nameoftable_table
```

3. Execute migrations
```sh
docker container exec -u 1000 laravel php artisan migrate
```

4. Create new seed
```sh
docker container exec -u 1000 laravel php artisan make:seeder NameOfSeed
```

5. Erase all tables and seed
```sh
docker container exec -u 1000 laravel php artisan migrate:fresh --seed
```

### How to access storage link?
```sh
docker container exec -u 1000 laravel php artisan storage:link
```

### How to get the pagination default from Laravel?

1. Execute the command below
```sh
docker container exec -u 1000 laravel php artisan vendor:publish --tag=laravel-pagination
```
2. Go to App/Providers/AppServiceProvider file

3. Add the code
```php
use Illuminate\Pagination\Paginator;
public function boot()
    {
        Paginator::defaultView('vendor.pagination.bootstrap-4');
    }
```
