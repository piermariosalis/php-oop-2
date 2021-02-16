@php

/* Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
*/


class User {
     public $name;
     public $lastname;
     public $emails;
 

 function __construct($name, $lastname, $emails) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;


 }


}


class subscribe_status extends User {
        public $status;

        public function setStatus($status, $posts, $last_access) {
            $this->status = $status;
            $this->posts = $posts;
            $this->last_article = $last_article;

        }


}
echo '<h1>Users status </h1> ';

echo ' <hr> ';
echo '<strong>Name: </strong>'.$name = '<strong>Mauro</strong> <br>';
echo '<strong>Lastname: </strong>'.$lastname = '<strong>Verdi</strong> <br>'; 
echo '<strong>Email: </strong>'.$email = '<strong>m.verdi@email.it</strong> <br>'; 
echo '<strong>Email Confirmed: </strong>'.$status = '<strong>Confirmed</strong> <br>'; 
echo '<strong>Posts: </strong>'.$posts = '<strong>3</strong> <br>'; 
echo '<strong>Last Article (seen): </strong>'.$last_article = '<strong>"HTML 6 - THE FUTURE"</strong> <br>'; 


echo ' <hr> ';
echo '<strong>Name: </strong>'.$name = '<strong>Matteo</strong> <br>';
echo '<strong>Lastname: </strong>'.$lastname = '<strong>Rossi</strong> <br>'; 
echo '<strong>Email: </strong>'.$email = '<strong>rossi_matteo@em.it</strong> <br>'; 
echo '<strong>Email Confirmed: </strong>'.$status = '<strong>Not Confirmed</strong> <br>'; 
echo '<strong>Posts: </strong>'.$posts = '<strong>0</strong> <br>'; 
echo '<strong>Last Article (seen): </strong>'.$last_article = '<strong>"CSS GRID - COMPLETE GUIDE"</strong> <br>'; 
echo ' <hr> ';
echo '<strong>Name: </strong>'.$name = '<strong>Antonio</strong> <br>';
echo '<strong>Lastname: </strong>'.$lastname = '<strong>Alighieri</strong> <br>'; 
echo '<strong>Email: </strong>'.$email = '<strong>ant.alighieri1@gmail.com</strong> <br>'; 
echo '<strong>Email Confirmed: </strong>'.$status = '<strong>Not Confirmed</strong> <br>'; 
echo '<strong>Posts: </strong>'.$posts = '<strong>0</strong> <br>'; 
echo '<strong>Last Article (seen): </strong>'.$last_article = '<strong>"LINUX VS OSX VS WINDOWS10"</strong> <br>'; 
echo ' <hr> ';
echo '<strong>Name: </strong>'.$name = '<strong>Giovanni</strong> <br>';
echo '<strong>Lastname: </strong>'.$lastname = '<strong>Montalbano</strong> <br>'; 
echo '<strong>Email: </strong>'.$email = '<strong>montalbano.giovi@aol.it</strong> <br>'; 
echo '<strong>Email Confirmed: </strong>'.$status = '<strong>Confirmed</strong> <br>'; 
echo '<strong>Posts: </strong>'.$posts = '<strong>43</strong> <br>'; 
echo '<strong>Last Article (seen): </strong>'.$last_article = '<strong>"WORDPRESS IS STILL A GOOD CHOICE"</strong> <br>'; 
echo ' <hr> ';

@endphp