<?php require "_include/header.html"; ?>
<body>
<header>
    </header>
    <div class="nav-page"><?php require "_include/nav.html"; ?></div>
<main class="main-page">

<div class="text-center p-5">
<h3>Contactez nous</h3>
<p>Ce formulaire de contact est à votre disposition pour toute question éventuelle.
Nous vous répondrons par mail dans les meilleurs délais.
Les réservations: 02 044 453 12 ou sur le module de réservation.
Nous accueillons les groupes jusqu’à 20 personnes. Privatisation possible.
Nous nous déplaçons aussi pour vos événements privés.</p>
</div>
<form>
<div class="row justify-content-between">
    <!-- form nom -->
    <div class="form-group row col-6 justify-content-right">
    <label class="col-2 text-right col-form-label" for="name">Nom</label>
      <div class="col-10">
    <input type="name" class="form-control" id="name" placeholder="Pierre"></div></div>
    <!-- form prénom -->
    <div class="form-group row col-6">
    <label class="col-2 text-right col-form-label" for="firstname">Prénom</label>
    <div class="col-10">
    <input type="firstname" class="form-control" id="firstname" placeholder="De lamontagne">
    </div></div>
    </div><!-- end row nom prenom -->
    <!-- form email -->
    <div class="form-group row">
    <label class="col-1 text-right col-form-label" for="email">Email</label>
    <div class="col-11">
    <input type="firstname" class="form-control" id="email" placeholder="pierre.delamontage@gmail.com">
    </div></div>  
    <!-- form sujet -->
    <div class="form-group">
    <label for="object">Objet</label>
    <select class="form-control" id="object">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <!-- form text -->
  <div class="form-group">
    <label for="textarea">Question</label>
    <textarea class="form-control" id="textarea" rows="3"></textarea>
  </div>
<!-- form bouton -->
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</main>
<?php require "_include/footer.html"; ?>
            
</body>
</html>