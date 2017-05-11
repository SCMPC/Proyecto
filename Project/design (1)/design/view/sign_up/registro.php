<center> <br><br><br>   
    <img src="assets/img/banner.jpg" width="300" height="300" class="img-rounded">
    <br><br>
    <div class="container">    
<div class="jumbotron" style="background-color:#74F142;">    
<div class="container">
    <h2><font face="castellar" color="#249BFD">Registry</h2></font>
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
          <label for="date">Birthdate:     .</label>
          <input type="date" class="form-control" id="date" name="date">
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
         <div class="form-group">
          <label for="user">User:</label>
          <input type="text" class="form-control" id="user" placeholder="Enter user" name="user">
      </div>
      <br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
      <br>
      <div class="form-group">
       <strong>Genero:</strong>
      <br>
      <label class="radio-inline">
          <input type="radio" name="genero"> Male
    </label>
      <br>
    <label class="radio-inline">
        <input type="radio" name="genero"> Female
    </label>
      </div>
    <br><br>
    <a href="?clase=login&metodo=login" class="btn btn-primary btn-lg active" role="button">Check in</a> 
   </form>
   </div>
</div>
    </div>
</center>