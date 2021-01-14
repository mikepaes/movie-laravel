<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Movie Project

Após clonar o projeto, utilize os comandos a baixo para configurar o ambiente utilizado.

```
docker-compose build app
docker-compose up -d
```

Agora devemos executar o composer que já esta configurado no container do docker, execute então.

```
docker-compose exec app composer install
```

Por fim vamos ajustar o banco de dados com os comandos do laravel.

```
docker-compose exec app php artisan migrate
docker-compose exec app php artisan db:seed --class=MoviesSeeder
```

Acessar http://localhost
