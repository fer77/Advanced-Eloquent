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

## 2

Boot up `php artisan tinker` and run `App\Post::all();`

To find a certain post(id) run:
- `use App\Post;`
- `Post::find(pass id here)`: laravel returns a modal instance.
Can also pass an array:
- `Post::find([40, 42]);`: laravel returns a collection.

`Post::find(1)` creates a new instance of `Illuminate\Database\Query` builder class. **Do not confuse this class with `Illuminate\Database\Query` builder class**.

so `Post::find()` is the same as `Post::where('id', '=', $id)->first()` in the _find_ method of the builder class.

To try this out:
- `$post = new Post;`
- `$post->newQuery()->find(42);` now try
- `$post->newQuery()->where('id', '=', 42)->first();`