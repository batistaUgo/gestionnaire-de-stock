<?php
include "sqlconnect.php";

$sql='SELECT nom FROM categorie ;';
                                $table = $connection->query($sql);
                                while($ligne = $table->fetch()) {

                                echo $ligne['nom'].'<br>';
                                }
                                $table->closeCursor();
                            ?>