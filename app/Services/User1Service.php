<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service{
    
    use ConsumesExternalService;

    /**
     * The base uri to consume the User1 Service
     * @var string
     */

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.users1.base_uri');
    }

    //OBTAIN THE DATA IN USERS1

    public function obtainUsers1(){
        return $this->performRequest('GET','/users');
    }

    //ADD DATA IN USERS1

    public function createUser1($data){
        return $this->performRequest('POST', '/users',$data);
    }

    //GET USER BY ID IN USERS1

    public function obtainUser1($id){
        return $this->performRequest('GET', "/users/{$id}");
    }

    //UPDATE USER BY ID USING >>>PUT<<<

    public function editUser1($data, $id){
        return $this->performRequest('PUT',"/users/{$id}", $data);
    }

    //UPDATE USER BY ID USING >>>PATCH<<<

    public function editUsers1($data, $id){
        return $this->performRequest('PATCH',"/users/{$id}", $data);
    }

    //DELETE USER BY IN USERS1

    public function deleteUser1($id){
        return $this->performRequest('DELETE', "/users/{$id}");
    }
}