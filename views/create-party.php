<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Création de soirée</title>
  
  
<link rel='stylesheet prefetch' href='https://unpkg.com/vuetify/dist/vuetify.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet' href='../css/styleForm.css'>

  
  
</head>

<body>
  <div id="create-party" class="app content-wrap">
  <!-- Start Content -->
  <div class="welcome-banner">
    <h1 class="welcome-user">Welcome, Billy!</h1>
  </div>

  <div id="signup-form" class="card-cont">
    <div class="form-inner">
      <div class="form-head">
        <div class="cross-x">
          <svg width="100%" height="100%" viewBox="0 0 22 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
    <g transform="matrix(0.777014,0,0,0.777014,-922.517,-186.157)">
        <g transform="matrix(0.529032,0.587118,-0.588247,0.530049,1244.79,-78.6969)">
            <rect x="251.781" y="321.519" width="50.484" height="2.708" style="fill:rgb(203,209,213);fill-opacity:0.980392;"/>
        </g>
        <g transform="matrix(-0.529032,0.587118,0.588247,0.530049,1158.04,-78.6969)">
            <rect x="251.781" y="321.519" width="50.484" height="2.708" style="fill:rgb(203,209,213);fill-opacity:0.980392;"/>
        </g>
    </g>
</svg>
        </div>
        <h1 class="form-name">Sign Up</h1>
      </div>
      <!-- Form -->
      <form action="">
        <div class="input-wrap half-input">
          <label for="firstName">First Name</label>
          <input id="first-name" placeholder="First Name" class="input" type="text" />
        </div>
        <div class="input-wrap half-input">
          <label for="surname">Surname</label>
          <input id="surname" placeholder="Surname" class="input gradient" type="text" />
        </div>
        <div class="input-wrap">
          <label for="signup-email-field">Email</label>
          <input id="signup-email-field" placeholder="Email" class="input gradient" type="text" />
        </div>
        <div class="input-wrap">
          <label for="signup-password">Username/Email</label>
          <input id="signup-password" placeholder="Password" class="input gradient" type="text" />
        </div>
        <div class="input-wrap">
          <label for="signup-re-password">Username/Email</label>
          <input id="signup-re-password" placeholder="Re-type password" class="input gradient" type="text" />
        </div>
        <div class="btn-wraps">
          <div id="next-wrap">
            <a href="" class="next-btn">Next ></a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div id="login-form" class="card-cont">
    <div class="form-inner">
      <div class="form-head">
        <div class="cross-x">
          <svg width="100%" height="100%" viewBox="0 0 22 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
    <g transform="matrix(0.777014,0,0,0.777014,-922.517,-186.157)">
        <g transform="matrix(0.529032,0.587118,-0.588247,0.530049,1244.79,-78.6969)">
            <rect x="251.781" y="321.519" width="50.484" height="2.708" style="fill:rgb(203,209,213);fill-opacity:0.980392;"/>
        </g>
        <g transform="matrix(-0.529032,0.587118,0.588247,0.530049,1158.04,-78.6969)">
            <rect x="251.781" y="321.519" width="50.484" height="2.708" style="fill:rgb(203,209,213);fill-opacity:0.980392;"/>
        </g>
    </g>
</svg>
        </div>
        <h1 class="form-name">Login to My Account</h1>
      </div>
      <!-- Form create-->
      <form action="">
        <div class="input-wrap">
          <label for="username">Username/Email</label>
          <input id="username" placeholder="Username" class="input" type="text" />
        </div>
        <div class="input-wrap">
          <label for="password">Username/Email</label>
          <input id="password" placeholder="Password" class="input gradient" type="password" />
          <a href="" id="password-reset">Forgotten password?</a>
        </div>
        <div class="btn-wraps">
          <div id="submit-wrap">
            <button @click="" id="submit" class="btn" type="submit" value="Log in"> Créer ta soirée !</button>
          </div>
          <div id="sign-up-wrap">
            <button @click="" type="button" id="sign-up"></button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- End Content -->
</div>
  <script src='https://unpkg.com/vue@2.4.1/dist/vue.js'></script>
<script src='https://unpkg.com/vuetify/dist/vuetify.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>
    <script src="../js/index.js"></script>

</body>
</html>
