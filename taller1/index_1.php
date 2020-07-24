<?php
    class User{
        //properties methods
        public $userName = '';
        public $email = '';
        public $role = 'member';

        public function __construct($username, $email){
            $this->userName = $username;
            $this->email = $email;
        }

        public function __destruct(){
            echo $this->userName ."was removed<br>";
        }

        public function __clone(){
            $this->email = $this->email."Was cloned<br>";
        }
        public function addFriend(){
            // $userName = 'Octavio2';
            return $this->userName;
        }
        public function message(){
            return $this->email;
        }
        //getters
        public function getEmail(){
            return $this->email;
        }     
        
        //setters
        public function setEmail($email){
            if (strpos($email,'@')>-1){
                $this->email = $email;
            }
        }     
    }

    class AdminUser extends User{
        public $level;
        public $role = 'admin';

        public function __construct($username, $email ,$level){
            $this->level = $level;
            // $this->userName = $username;
            // $this->email = $email;
            parent::__construct($username, $email);
        }
        public function message(){
            return $this->email;
        }

    }

    $userOne = new User('octavio','octavio@gmail.com');
    $userTwo = new User('amador','amador@gmail.com');
    $userThree = new AdminUser('vanessa','vanessa@gmail.com',3);
    unset($userOne);
    $userFour = clone $userOne;

    echo "userOne->getEmail: ".$userOne->getEmail()."<br>";
    echo "userTwo->getEmail: ".$userTwo->getEmail()."<br>";
    echo "userThree->getEmail: ".$userThree->getEmail()."<br>";
    echo "userThree->level: ".$userThree->level."<br>";
    echo "userThree->message: ".$userThree->message()."<br>";
    echo "userOne->role: ".$userOne->role."<br>";
    echo "userThree->role: ".$userThree->role."<br>";


    // $nameUser= $userOne->addFriend();
    // echo 'This is the class '. get_class($userOne)."<br>";
    // echo 'the user name is '.$nameUser."<br>";
    // echo 'the user name is '.$userOne->userName."<br>";
    // echo 'the user name is '.$userOne->userName2."<br>";
    // echo 'the user name is '.$userOne->addFriend()."<br>";
    // echo 'the user name is '.User::addFriend()."<br>";
?>


<?php
class Classy {

    const       STAT = 'S' ; // no dollar sign for constants (they are always static)
    static     $stat = 'Static' ;
    public     $publ = 'Public' ;
    private    $priv = 'Private' ;
    protected  $prot = 'Protected' ;
    
    function __construct( ){  }
    
    public function showMe( ){
        print '<br> self::STAT: '  .  self::STAT ; // refer to a (static) constant like this
        print '<br> self::$stat: ' . self::$stat ; // static variable
        print '<br> $this->stat: '  . $this->stat ; // legal, but not what you might think: empty result
        print '<br> $this->publ: '  . $this->publ ; // refer to an object variable like this
        print '<br>' ;
    }
    }
    $me = new Classy( ) ;
    $me->showMe( ) ;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP POO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    </body>
</html>