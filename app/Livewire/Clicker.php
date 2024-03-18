<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;
 public $name='';
    public $email='';
    public $password='';
   public function createNewUser(){

    $this->validate(
        [
            'name' => "required|min:3|max:20",
            'email'=> "required|email|unique:users",
            'password'=>"required|min:8|max:20"
        ]
        );
        User::create(
            [
                'name'=> $this->name,
                'email'=> $this->email,
                'password'=>$this->password
            ]
         );
         $this->reset(['name','email','password']);
         session()->flash('success','User created succesfully');
         return redirect('/');

    }

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.clicker',[
            "users"=>$users
        ]);
    }
}
