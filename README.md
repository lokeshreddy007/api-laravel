# Laravel 8 API

```php
php artisan make:Model Person -mf // add model adn factory
```

```php
php artisan make:seed PersonTableSeeder
```

```php
php artisan make:resource PersonResource
```

```php
php artisan make:resource PersonResourceCollection --collection
```

#### API links

```php
http://127.0.0.1:8000/api/person # Get all Person details

```

```php
http://127.0.0.1:8000/api/person/61  # Get One Person details
```

```php
http://127.0.0.1:8000/api/person # POST Add Person details

```

```php
http://127.0.0.1:8000/api/person/61  # PUT Update Person details
```

```php
http://127.0.0.1:8000/api/person/61 # DELETE delete Person details

```

### Version API

```php
http://127.0.0.1:8000/api/v1/person/2
```

```php
http://127.0.0.1:8000/api/v2/person/2
```
