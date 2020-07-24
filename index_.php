<?php
    class User{
        //properties methods
        public function addFriend(){
            $userName = 'Octavio';
            $email = 'octaviogodoyg@gmail.com';
            $result = $this->$userName;
            return $result;
        }
    }

    $userOne = new User();

    echo 'This is the class '. get_class($userOne);
    $nameUser= $userOne->addFriend();
    echo 'the user name is '.$userOne->$userName;     
?>