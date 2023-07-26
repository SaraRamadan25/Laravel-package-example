<?php
namespace Spatie\Example\Tests;

use Spatie\Example\Models\MyModel;

it('can create an uppercased value of the name',function (){
    $myModel = MyModel::factory()->create(['name'=>'sara']);
    expect($myModel->getUppercaseName())->toEqual('SARA');

});
