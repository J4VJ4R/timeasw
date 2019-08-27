<!DOCTYPE html> 
<html> 
 
<head> 
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head> 
 
<body> 
   <h2 class="text-center">Número de estudiantes.</h2> 
<br/>
       <div class="row">
           <div class="col-sm-5"></div>
<div class="col-sm-1"> 
        <select class="form-control input-xs"> 
                    <option>1</option> 
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                   <option>5</option>
                   <option>6</option>
                </select> 
      </div> 
      <div class="col-sm-6"> 
           <button type="button" class="btn btn-danger">Procesar</button> 
  
      </div> 
      
</div>
<br/>
<table class="table"> 
    <thead> 
      <tr> 
        
        <th>Nombre</th> 
        <th>Tiempo</th> 
        <th>Estado</th> 
      </tr> 
    </thead> 
    <tbody> 
      <tr class="active"> 
        
        <td>Libardo</td> 
        <td>12:59</td> 
        <td>Activo</td> 
      </tr> 
      <tr class="success"> 
        <td>2</td> 
        <td>Water</td> 
        <td>01/07/2014</td> 
        <td>Paid</td> 
      </tr> 
      <tr class="info"> 
        <td>3</td> 
        <td>Internet</td> 
        <td>05/07/2014</td> 
        <td>Change plan</td> 
      </tr> 
      <tr class="warning"> 
        <td>4</td> 
        <td>Electricity</td> 
        <td>03/07/2014</td> 
        <td>Pending</td> 
      </tr> 
      <tr class="danger"> 
        <td>5</td> 
        <td>Telephone</td> 
        <td>06/07/2014</td> 
        <td>Due</td> 
      </tr> 
    </tbody> 
  </table> 
 <div class="row">
<div class="col-xs-4"> 
        <p>Box 1</p> 
      </div> 
      <div class="col-xs-4"> 
        <p>Box 2</p> 
      </div> 
      <div class="col-xs-4"> 
        <p>Box 3</p> 
      </div>
</div>
<div class="row">
    <div class="col-sm-6">
    <button type="button" class="btn btn-danger float-right ">Start</button> 
    </div>
</div>
  


<br />


 
  <script src="bootstrap/js/jquery.js"></script> 
  <script src="bootstrap/js/bootstrap.js"></script> 
</body> 
 
</html>