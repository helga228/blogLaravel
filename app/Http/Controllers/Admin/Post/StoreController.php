<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StoreController extends Controller
{
    use DatabaseMigrations;

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate($data);

        return redirect()->route('admin.post.index');
    }
}
