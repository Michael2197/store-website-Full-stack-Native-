<?php 
// class Person{

//  public $name ;

//  private $age;

//  public $addres;

//  public function __construct($m,$g,$d){
//  $this->name = $m;
//  $this->age = $g;
//  $this->addres = $d;


// }


// //  public function ok(){
// //     echo'this is method';
// //  }

//  public function getage(){
//     if ($this->name=='omar'){
//         return $this->age;
//     }else{
//         echo'you are not allowed';
//     }
//  }

 
//  public function setage($l){
//     if($l < 18){
//         echo'this is not allowed for you';
//     }else{
//         $this->age=$l;


//     }

//  }

// }

// $firstperson = new Person('michael',15,'cairo');
// $secondperson =new Person('omar',17,'giza');

// echo $firstperson->name;
// $firstperson->setage(25);
// echo $firstperson->getage();



// echo $secondperson->name;
// $secondperson->setage(19);
// echo $secondperson->getage();





class users{

    public $id;
    public $name;
    public $password;

    public function __construct($d,$n){

        $this->id = $d;

        $this->name = $n;
    }
}



class admin extends users{

    public $employid;


}

class sales extends admin{
    
    public $products;
   
}




$admin= new sales(18,'ahmed');


echo$admin->name;
echo $admin->id;






// customer: id, name, password
// admin: id, name, password, employ id
// sales: id, name, password, employ id, products


?>