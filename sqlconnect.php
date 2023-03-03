<?php  

try {
                $dns = 'mysql:host=localhost;dbname=stock';
                $utilisateur = $_REQUEST['nom'];
                $motDePasse = $_REQUEST['mdp'];
                $connection = new PDO( $dns, $utilisateur, $motDePasse );
                $connection->query("SET NAMES utf8");
            } catch ( Exception $e ) {
                echo "Connection à MySQL impossible : ", $e->getMessage();
                die();
            }