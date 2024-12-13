<?php

    require_once './controller/produitController.php';
    require_once './controller/categorieController.php';
    require_once './view/header.php';


    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='delete'){
            remove();
        }
        if($_GET['action']=='add'){
            $categories = getAllCategories();
            require_once 'view/add.php';

        
        }
        if($_GET['action']=='save'){
            save();
        }
        if($_GET['action']=='edit'){
            $id = $_GET['id'];
           $produit= getProduitById($id) ;
           $categories = getAllCategories();
             require_once 'view/edit.php';
         
          
        }
        if($_GET['action']=='editProduit'){
         
            updateP();
        }
        // *******************Partie Categorie **************
        if($_GET['action']=='listCategorie'){
            indexC();
        }
        if($_GET['action']=='deleteCategorie'){
            removeC();
        }
        if($_GET['action']=='addCategorie'){
           
            require_once 'view/categorie/add.php';

        
        }
        if($_GET['action']=='saveC'){
            saveC();
        }
        if($_GET['action']=='editCategorie'){
            $id = $_GET['id'];
            $categorie=getCategorieById($id) ;
            require_once 'view/categorie/edit.php';
        }
        if($_GET['action']=='updateC'){
         
            updateC();
        }
    }else{
        index();
    }
    
?>