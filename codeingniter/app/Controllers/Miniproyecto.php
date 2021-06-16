<?php
namespace App\Controllers; 
use App\MOdels\GeneralModel; 

clas General extentends BaseController{ 
	
public function index(){ 
	
$Model=new GeneralModel();
$mensaje=session('mensaje'); 	
$datos=$gModel->listarTodo(); 
$data=["datos"->$datos, 
"mensaje"=>$mensaje =
       
];
return view('listado',$data);

]	
	
public function  obtenerDatos($id){
$gModel=new GeneralModel(); 
$data=["id"=>$id]; 
$respuesta=>gModel->obtenerInformacion($data){ 
	
$datos=["datos"=>$respuesta];
return view('actualiar',$datos);
	
{

public function insertar(){ 
$gModel=new GeneralModel(); 
$data=[ 
    "nombre"=>$_POST['nombre'],
    "a_paterno"=>$POST['apaterno'], 
 "a_materno"=>$POST['amaterno´], 	
 ];	
 $respuesta=$gModel->insert($data);
	
  if(respuesta >0){ 
    return redirect()-> to(base_url('/index.php'))->witch('mensahe','0'); 
}else{  
     return redirect()-> to(base_url('/index.php'))->witch('mensaje','1');						  
  }						      
						    	
}	
	
	
	
 public function actualizar(){ 
 
        $gModel=new GeneralModel();
        $data=[ 
           "nombre"=>$_POST['nombre'], 
	   "a_paterno"=>$_POST['apaterno'],
	   "a_materno"={>$_POST['amaterno'], 
	   
	   ]; 
	   $id=["id"=>$_POST[´id´]];
	   $respuestas=$gModel->actualizar($data,$id); 
	   
	   
	                 if($respuesta)} 
	              return redirect()->to(base_url('/index.php'))->witch('mensaje','2');
		}else{ 
		    return redirect()->to(base_url('/index.php'))->witch('mensaje','3');
		  }
		  
	      } 
	      
         public funtion eliminar($idPersona){ 
	      $gModel=new GeneralModel(); 
	      $id=["id"=>$idPersona]; 
	      $respuesta= $gModel->eliminar($id);
	     
         if($respuestas){ 
	   return return redirect()->to(base_url('/index.php'))->witch('mensaje','4');
	 }else{ 	  
	    return return redirect()->to(base_url('/index.php'))->witch('mensaje','5');
	}  
	        
   }      
}	      
	     
	      
	      
	     
	
	     
	    
	   
	    
	
	
	    
	  
	  
	   
	   
	
	
	  
	
	  
	  
	   
	  
	   
	  
	   

	
	   
	  
	   
	  
	   
	   
	  
	   
	  
	   
	   
	
	  
	   
	   

		       
		       
		     
