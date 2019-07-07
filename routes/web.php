<?php


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function(){
Route::get('/admin/','BackendController@dashboard')->name('backend.dashboard');
});
//NhanVien
    //Route danh sách nhân viên
    Route::get('/admin/nhanvien', 'NhanvienController@index')->name('backend.nhanvien.index');
    Route::get('/admin/nhanvien/themmoi', 'NhanvienController@create')->name('backend.nhanvien.create');
    Route::post('/admin/nhanvien/store', 'NhanvienController@store')->name('backend.nhanvien.store');
    Route::get('/admin/nhanvien/edit/{id}', 'NhanvienController@edit')->name('backend.nhanvien.edit');
    Route::put('/admin/nhanvien/update/{id}', 'NhanvienController@update')->name('backend.nhanvien.update');
    Route::delete('/admin/nhanvien/delete/{id}', 'NhanvienController@destroy')->name('backend.nhanvien.destroy');
    Route::get('/admin/nhanvien/print', 'NhanvienController@print')->name('backend.nhanvien.print');
    Route::get('/admin/nhanvien/pdf', 'NhanvienController@pdf')->name('backend.nhanvien.pdf');
// Auth::routes();
// Xác thực Routes...
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');
// Đăng ký Routes...
Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/admin/register', 'Auth\RegisterController@register');
// Quên mật khẩu Routes...
Route::get('/admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/admin/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');
