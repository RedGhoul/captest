<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/projects', function () {
    $project = Project::create([
        'name' => 'London to Paris',
        'tag_line' => 'cool',
        'github_url' => 'cool2',
        'live_url' => 'live_url',
    ]);
    $project->save();
    return Project::all();
});
