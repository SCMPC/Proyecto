<center> <br><br><br>   
    <img src="assets/img/banner.jpg" width="300" height="300" class="img-rounded">
    <br><br>
    
<div class="container">
    <h2><font face="Castellar" color="#249BFD">Registry</h2></font>
  <form class="form-inline" action="/action_page.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" onkeypress="return soloLetras(event)">
    </div>
      <br>
       <div class="form-group">
      <label for="name">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" onkeypress="return soloLetras(event)">
    </div>
      <br>
      <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
      </div>
      <br>
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
      <br>
      Genero:
      <br>
      <label class="radio-inline">
      <input type="radio" name="genero">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="genero">Female
    </label>
      <br>
         <div class="form-group">
          <label for="user">User:</label>
          <input type="text" class="form-control" id="user" placeholder="Enter user" name="user">
      </div>
      <br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <br><br>
 <input type="submit" value="Registrarse">  
   </form>
   </div>

</center>