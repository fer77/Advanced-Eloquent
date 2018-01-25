## 1

`php artisan make:migration:schema create_posts_table --schema="user_id:integer:foreign, title:string, body:text"`

makes our migration tables `database > migrations >`

set up database

```bash
//...
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=storage/database.sqlite
DB_USERNAME=root
DB_PASSWORD=root
//...
```

run migration `php artisan migrate`

_seeds_ are used to make dummy data `php artisan make:seed posts`