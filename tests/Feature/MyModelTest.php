<?php
namespace Spatie\Example\Tests;

use Illuminate\Support\Facades\DB;
use Spatie\Example\Models\MyModel;

it('can create an uppercased value of the name',function (){
    $myModel = MyModel::factory()->create(['name'=>'sara']);
    expect($myModel->getUppercaseName())->toEqual('SARA');

});

it('can use json queries',function (){
    $models  = DB::table('my_models')
        ->whereJsonContains('options->languages','en')
        ->get();

    expect($models)->toHaveCount(0);
});
