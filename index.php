<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $nom =$_REQUEST['nom'];
        $mdp =$_REQUEST['mdp'];
        if(isset($nom))
        {
            
            try{
                $connection = new PDO('mysql:host=localhost;dbname=loginsysteme',$nom,$mdp);
            }catch(Exception $e){
                echo "Connection à la base de données impossible : ", $e->getMessage();
                die();
            }
    ?>
            <header>
                <nav>
                    <h1>gestionnaire de stock</h1>
                    <div>
                        <p>
                            <!-- les droits -->
                            <p>
                                <?php echo $nom ?>
                            </p>
                        </p>
                    </div>
                </nav>
            </header>


            <main>
                <ul>
                    <?php
                    include "sqlconnect.php";
                    $sql='SELECT nom FROM categorie ;';
                        $table = $connection->query($sql);
                        while($ligne = $table->fetch()) {

                        echo "<li>".$ligne['nom'].'</li><br>';
                        }
                        $table->closeCursor();
                    ?>
                </ul>

            </main>








        <?php
        }else{
            header('Location: login.php');
            exit();
        }
        ?>
    
</body>
</html>