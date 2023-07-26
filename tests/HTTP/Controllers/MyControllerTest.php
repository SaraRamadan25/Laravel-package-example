<?php

namespace Spatie\Example\Tests\HTTP\Controllers;

use Spatie\Example\HTTP\Controllers\MyController;

it('has a route',function (){
    $this
/*        ->get('my-route')*/
        ->get(action([MyController::class,'index']))
        ->assertOk()
        ->assertSee('hi from the view of the package');
});
