<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use function dd;

class StoreController extends Controller
{
    use DatabaseMigrations;

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}
