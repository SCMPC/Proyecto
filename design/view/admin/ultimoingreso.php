<br>
<center>
    <p3><h2>Ingreso y salida de usuarios <span class="fa fa-motorcycle" aria-hidden="true"></span></h2></p3>
    <br><br>
 <form class="form-inline" action="/action_page.php"> 
<label for="ingr">Por favor ingrese el documento del usuario: </label>
<br>
<div class="form-group">
  <label for="sel1">Tipo de documento:</label>
  <select class="form-control" id="sel1">
    <option>CC</option>
    <option>T.I</option>
    <option>CC.Extranjeria</option>
    <option>Pasaporte</option>
  </select>
</div>
<div class="form-group">
 <input class="form-control" type="text" name="ingr" id="ingr" placeholder="Ingresa documento">
    </div>
     <br><br>
    <a  class="btn btn-primary btn-lg active" role="button">Buscar</a>
    </form>    
</center>
 <div class="container">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Hora entrada/salida</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1234562186</td>
        <td>Juan Martinez</td>
        <td>24/12/2017</td>
        <td>12:15 pm - 8:25 pm</td>
      </tr>
      <tr>
        <td>1234562186</td>
        <td>Juan Martinez</td>
        <td>26/12/2017</td>
        <td>06:12 am - 12:00 pm</td>
      </tr>
      <tr>
       <td>1234562186</td>
        <td>Juan Martinez</td>
        <td>27/12/2017</td>
        <td>7:30 am - 9:30 am</td>
      </tr>
    </tbody>
  </table>
     
</div>
</form>
