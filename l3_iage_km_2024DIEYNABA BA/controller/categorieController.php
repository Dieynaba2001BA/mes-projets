<?php
 require_once './model/categorieModel.php';

 function indexC(){
    $categories = getAllCategories();
    require_once './view/categorie/list.php';
 
  
}
 
    

function removeC(){
    $id =$_GET['id'];
    deleteCategorie($id);
    header('Location: index.php?action=listCategorie');
   

}
function createC(){
    require_once './view/add.php';
}

function saveC() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $libelle = $_POST['libelle'];
       
          if ($libelle) { 
            addCategorie($libelle);
            header('Location: index.php?action=listCategorie');
            } else { 
                echo "Tous les champs sont obligatoires."; 
            }

            }
        }

        function updateC() { 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
                 $id = $_POST['id']; 
                $libelle = $_POST['libelle'];
               
                  if ( $id && $libelle ) { 
                    updateCategorie( $id, $libelle);
                    header('Location: index.php?action=listCategorie');
                     } else { echo "Tous les champs sont obligatoires."; }
        
        
                    }
                }

?>