<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model {

    const USERNAME = 'samina@ekbana.com';
    const PASSWORD = 'samina123';
    protected $table = 'users';
    protected $fillable = array('id','name','email','password','remember_token');


}
