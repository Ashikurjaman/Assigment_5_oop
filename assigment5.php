
<?php


global $person;
class Person {
 
  public $name;
  public $email;
  
  public function setName($name="") {
      $this->name = $name;
  }
  
  public function getName() {
      return $this->name;
  }
  
  public function setEmail($email="") {
      $this->email = $email;
  }
  
  public function getEmail() {
      return $this->email;
  }
}

      
        if(isset($_POST["submit"]) && !empty($_POST["submit"]) ){
          $name = $_POST["name"];
          $email = $_POST["email"];
        
        }
        
    $person = new Person();
    $person->setName($name);
    $person->setEmail($email);

    //  echo 'Name: '.$person->getName()."<br>";
    //  echo 'Email: '.$person->getEmail();
    ?>


<html></html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
  <body class="container">

<header class="text-center mb-5 fs-1 text">Assigment 5</header>

    <div id="form-container">
      <form action="" method="POST">
        <label for="name">Name:</label>
        <input class="form-control mb-3" type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input class="form-control mb-3" type="email" id="email" name="email">
        <input class="form-control  bg-primary" type="submit" name="submit" value="Submit">
      </form>
    </div>

        <div class="container">
        <h2 class=" fs-2 text mt-5 text-center" for="name"> <?php
        echo 'Name: '.$person->getName() ."<br>";
        echo 'Email: '.$person->getEmail();
        
        ?> </h2>
        </div>
    
    
    
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>