<?php
        require_once './db_connect.php';
class PreRegister {
    private $_name;
    private $_first_name;
    private $_mail;
    private $_phone_number;
    private $_pdo;
    private $_role_id;
    // Constructeur
    public function __construct($_name, $_first_name, $_mail, $_phone_number, $_pdo, $_role_id) {
        $this->_name = $_name;
        $this->_first_name = $_first_name;
        $this->_mail = $_mail;
        $this->_phone_number = $_phone_number;
        $this->_pdo = $_pdo;
        $this->_role_id=$_role_id;
    }
   
    // Getter pour le nom
    public function getName() {
        return $this->_name;
    }

    //Getter pour prenom
    public function getFirst_name() {
        return $this->_first_name;
    }
      // Getter pour l'e-mail
      public function getMail() {
        return $this->_mail;
    }

       // Getter pour le numero de telephone
       public function getPhone_number() {
        return $this->_phone_number;
    }

    // Setter pour le nom
    public function setName($_name) {
        $this->_name = $_name;
    }
     // Setter pour le prenom
     public function setFirst_name( $_first_name) {
        $this->_first_name = $_first_name;
    }

    // Setter pour l'e-mail
    public function setMail($_mail) {
        $this->_mail = $_mail;
    }

    //setter pour le numero de telephone
    public function setPhone_number($_phone_number) {
         $this->_phone_number=$_phone_number;
    }

    Public function existing_verified(){
        $request1 = "SELECT mail, phone_number FROM users WHERE mail = :mail";
        $select_request1 = $this->_pdo->prepare($request1); // Préparer la requête
        
        $select_request1->bindParam(':mail', $this->_mail, PDO::PARAM_STR);
         // Exécuter la requête
        $select_request1->execute();
            // Récupérer le nombre de lignes renvoyées par la requête
            $rowCount = $select_request1->rowCount();
        return $rowCount;
        }
        

    // Méthode pour insérer les données dans la table users de la base de données
    public function register_users() {
        if($this->existing_verified() > 0)
                {
                    echo'<script> alert("cet utilisateur existe deja");
                    window.location.href = "./../../Views/pre_registration_form.php";
                    </script>';  
                exit;
                }  
        else
            {
                try 
                    {         
                        
                        $request="INSERT INTO users(last_name, first_name, mail, phone_number, role_id)
                            value(:NAM, :FIRSTNAME, :MAIL, :PHONENUMBER, :MODIFIED)";
                        $insertInBd =  $this->_pdo->prepare($request);
                        //links parameters
                        $insertInBd->bindParam(':NAM', $this->_name, PDO::PARAM_STR);
                        $insertInBd->bindParam(':FIRSTNAME', $this->_first_name, PDO::PARAM_STR);
                        $insertInBd->bindParam(':MAIL', $this->_mail, PDO::PARAM_STR);
                        $insertInBd->bindParam(':PHONENUMBER', $this->_phone_number, PDO::PARAM_STR);
                        $insertInBd->bindParam(':MODIFIED', $this->_role_id, PDO::PARAM_STR);       
                         //execution
                        $insertInBd->execute();            
                            echo"insertion des champs dans la table users ressui <br>";
                    }
                catch(PDOException $e)
                    {
                     echo"<br> connexion echouer : ".$e->getMessage() ;
            
                    }
             } 

    }
    // Préparer la requête SELECT pour obtenir l'id de l'utilisateur 
    public function obtain_id() {
        $request1 = "SELECT id FROM personne_inscrites WHERE mail = :mail and phone_number=:phonenumber  LIMIT 1";
        $select_request1 = $this->_pdo->prepare($request1); // Préparer la requête

        $select_request1->bindParam(':mail', $this->_mail, PDO::PARAM_STR);
        $select_request1->bindParam(':phonenumber', $this->_phone_number, PDO::PARAM_STR);
        $select_request1->execute();

        $result = $select_request1->fetch();
        return $result ? $result['id'] : null;
    }

    
        // Méthode pour insérer les données dans la table pre_registrations de la base de données
        public function register_pre_register() {
            try 
                {      
                    // recuperation de l'id de la fonction obtain_id
                    $id_user = $this-> obtain_id();          
                        $request="INSERT INTO pre_registrations(id, modified) value('', $id_user)";
                        // preparation de la requete 
                        $insertPR =  $this->_pdo->prepare($request); 
                        //execution request   
                        $insertPR->execute();
                            echo" <br> insertion de l'id et la cles eclangere de users dans la table pre_registrations reuissir <br>";
                }
            catch(PDOException $e)
                {
                     echo" <br> echec de l'insertion des donnees dans la table pre_registrations: ".$e->getMessage() ;
            
                }       
            }

     // Méthode pour insérer les données dans la table training de la base de données
     public function register_tranings() {
        try 
            {                 
                    $request="INSERT INTO users(last_name, first_name, mail, phone_number, modified)
                        value(:NAM, :FIRSTNAME, :MAIL, :PHONENUMBER, :MODIFIED)";
                    $insertInBd =  $this->_pdo->prepare($request);
                    //links parameters
                    $insertInBd->bindParam(':NAM', $this->_name, PDO::PARAM_STR);
                    $insertInBd->bindParam(':FIRSTNAME', $this->_first_name, PDO::PARAM_STR);
                    $insertInBd->bindParam(':MAIL', $this->_mail, PDO::PARAM_STR);
                    $insertInBd->bindParam(':PHONENUMBER', $this->_phone_number, PDO::PARAM_STR);
                    $insertInBd->bindParam(':MODIFIED', $this->_mail, PDO::PARAM_STR);
                        // execution request
                     $insertInBd->execute();
                        echo"insertion des champs dans la table users ressui <br>";
            }
        catch(PDOException $e){
                 echo"<br> connexion echouer : ".$e->getMessage() ;
        
            }
    
        }

    // Méthode pour mettre à jour les données dans la base de données
    public function update() {
        // Implémentation de la mise à jour des données dans la base de données
        // Cette partie du code sera spécifique à votre application et à votre base de données
        // Vous pouvez utiliser PDO ou tout autre méthode d'accès aux données
        echo "Données mises à jour dans la base de données.";
    }
}
// Étape 1 : Récupérer les données du formulaire

$name = htmlspecialchars($_POST['name']); // name
$first_name = htmlspecialchars($_POST['first_name']); // first name
$email = htmlspecialchars($_POST['mail']); // mail adresse
$phone = htmlspecialchars($_POST['phone']); // phone number
    if(strlen($phone)!= 9)
        {
            //header('location: ./../../Views/pre_registration_form.php');
            echo'<script> alert("veillez entrer une longueur de numero telephonique valide");
            window.location.href = "./../../Views/pre_registration_form.php";</script>';
            exit;                                     
        }
      
            //pour la formation
    if(isset($_POST['training_check']))
        {
            $trainings; // variable pour stoker la formation choisir
            $training_check_all = $_POST['training_check']; // atribut formulaire
            $training_select="";
                foreach($training_check_all as $training) {
                    $training_select=$training_select." / ".$training;
                }
                $trainings = $training_select;
        } 
    else 
        {
            echo'<script> alert("vous devez choisir au moins une formation.");
            window.location.href = "./../../Views/pre_registration_form.php";</script>';
        }
        $trainings = $training_select;
 //echo( $trainings.'<br>'.$name.'<br>'.$first_name.'<br>'.$email.'<br>'.$phone ); 

        try
            {
            $dbConnection = DatabaseConnection::getInstance();
            $pdo = $dbConnection->getPdo(); // Obtenir l'objet PDO
            $new_user = New PreRegister($name, $first_name, $email, $phone, $pdo, $role_id=4 );
            $new_user->register_users();
            }
        catch(PDOException $e)
            {
            echo"<br> connexion echouer : ".$e->getMessage() ;
   
            }


?>
