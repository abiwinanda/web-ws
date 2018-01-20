<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Customer Web Routes
|--------------------------------------------------------------------------
|
| All routes below this are for customer website
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'WS HME'
    ];

    return view('customer/home', $data);
})->name('home');

Route::get('/projects', function () {
    $data = [
        'title' => 'Projects'
    ];

    return view('customer/projects', $data);
})->name('projects');

Route::get('/catalog', 'CatalogController@index')->name('catalog');

Route::resource('rent', 'RentController');

Route::get('/about', function () {
    $data = [
        'title' => 'About Us'
    ];

    return view('customer/about', $data);
})->name('about');

Route::get('/admin_dashboard', function () {
    $data = [
        'title' => 'Dashboard'
    ];

    return view('admin/dashboard', $data);
})->name('admin_dashboard');


Route::get('/test', function() {
    $data = \App\Inventory::all();

    return $data;

});

Route::get('/load_available_inventory', function () {
    if(Request::ajax()) {
        $data = \App\Inventory::getAvailableInventory();

        // Initialize the html
        $html = '';
        $temp = 0;

        foreach ($data['qty_av'] as $single) {


            $available_html = '';

            // get the number of available inventory
            for ($i = 0; $i <= $single; $i++) {
                $available_html .= '<option value = "'.$i.'">'.$i.'</option>';
            }

            $html .= '<div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <img style="width: 400px; height: 300px;" src="'.asset('customer_assets/img/inventory/'.str_replace(' ', '_', $data['inventories'][$temp]->name).'.png').'" alt="...">
                            <div class="caption custom-center-inventory-title">
                                <h3>'.$data['inventories'][$temp]->name.'</h3>

                                <div class="custom-right-text-align">
                                    <select name="'.str_replace(' ', '_', $data['inventories'][$temp]->name).'_Qty" class="custom-inventory-quantity">'.
                                    $available_html
                                    .'</select>
                                </div>
                            </div>
                        </div>
                     </div>';

            $temp++;
        }

        return $html;
    }
});

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| All routes below this are for admin website
|
*/

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::get('/charts', function () {
    return view('admin/charts');
})->name('charts');

Route::get('/tables', function () {
    return view('admin/tables');
})->name('tables');

Route::get('/navbar', function () {
    return view('admin/navbar');
})->name('navbar');

Route::get('/cards', function () {
    return view('admin/cards');
})->name('cards');

Route::get('/login', function () {
    return view('admin/login');
})->name('login');

Route::get('/register', function () {
    return view('admin/register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('admin/forgot-password');
})->name('forgot-password');

Route::get('/blank', function () {
    return view('admin/blank');
})->name('blank');