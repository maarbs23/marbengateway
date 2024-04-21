<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service{
    
    use ConsumesExternalService;

    /**
     * The base uri to consume the User1 Service
     * @var string
     */

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.users2.base_uri');
    }

    //OBTAIN THE DATA IN USERS2

    public function obtainUsers2(){
        return $this->performRequest('GET','/users');
    }

    //ADD DATA IN USERS2

    public function createUser2($data){
        return $this->performRequest('POST', '/users',$data);
    }

    //GET USER BY ID IN USERS2

    public function obtainUser2($id){
        return $this->performRequest('GET', "/users/{$id}");
    }

    //UPDATE USER BY ID USING >>>PUT<<<

    public function editUser2($data, $id){
        return $this->performRequest('PUT',"/users/{$id}", $data);
    }

    //UPDATE USER BY ID USING >>>PATCH<<<

    public function editUsers2($data, $id){
        return $this->performRequest('PATCH',"/users/{$id}", $data);
    }

    //DELETE USER BY IN USERS1

    public function deleteUser2($id){
        return $this->performRequest('DELETE', "/users/{$id}");
    }
}