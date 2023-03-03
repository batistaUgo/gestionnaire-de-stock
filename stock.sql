#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: catégorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie Int  Auto_increment  NOT NULL ,
        nom          Varchar (25) NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produit
#------------------------------------------------------------

CREATE TABLE produit(
        id_produit          Int  Auto_increment  NOT NULL ,
        designation_produit Varchar (50) NOT NULL ,
        reference_produit   Varchar (30) NOT NULL ,
        niveau_critique     Int NOT NULL ,
        id_categorie        Int NOT NULL
	,CONSTRAINT produit_PK PRIMARY KEY (id_produit)

	,CONSTRAINT produit_categorie_FK FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fournisseur
#------------------------------------------------------------

CREATE TABLE fournisseur(
        id_fournisseur Int  Auto_increment  NOT NULL ,
        nom            Varchar (30) NOT NULL
	,CONSTRAINT fournisseur_PK PRIMARY KEY (id_fournisseur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lier
#------------------------------------------------------------

CREATE TABLE lier(
        id_fournisseur        Int NOT NULL ,
        id_produit            Int NOT NULL ,
        valorisation_unitaire Float NOT NULL ,
        quantite              Int NOT NULL
	,CONSTRAINT lier_PK PRIMARY KEY (id_fournisseur,id_produit)

	,CONSTRAINT lier_fournisseur_FK FOREIGN KEY (id_fournisseur) REFERENCES fournisseur(id_fournisseur)
	,CONSTRAINT lier_produit0_FK FOREIGN KEY (id_produit) REFERENCES produit(id_produit)
)ENGINE=InnoDB;

