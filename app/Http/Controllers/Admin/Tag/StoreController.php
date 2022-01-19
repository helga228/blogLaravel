<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StoreController extends Controller
{
    use DatabaseMigrations;

    public function __invoke(\App\Http\Requests\Admin\Tag\StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);

        return redirect()->route('admin.tag.index');
    }
}
