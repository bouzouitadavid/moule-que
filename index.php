<?php require "_include/header.html"; ?>
<body>
    <header>
            <div class="jumbotron">
                <div class="row wrapper text-principal">
                    <div class="col-4 text-right"><h1 class="display-4">Hello, world!</h1><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil fugiat unde amet repellendus maiores quas magni, omnis saepe ratione assumenda labore illum quam impedit voluptate asperiores dolorum numquam accusantium error.</p></div>
                    <div class="col-4 text-center"><figure></figure><svg viewBox="0 0 500 500">
                            <path id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                            <text class="text-logo">
                              <textPath xlink:href="#curve">
                                A la petite Moule
                              </textPath>
                            </text>
                          </svg></div>
                    <div class="col-4 text-left"><h1 class="display-4">Hello, world!</h1><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil fugiat unde amet repellendus maiores quas magni, omnis saepe ratione assumenda labore illum quam impedit voluptate asperiores dolorum numquam accusantium error.</p></div>
                </div><!-- end row-->
            </div><!-- end jumbotron-->
    </header>
    <?php require "_include/nav.html"; ?>
            <main>
                <section class="this-week wrapper">
                    <h3>Seulement cette semaine !</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, esse? Enim, eligendi quod repellendus quas deserunt nesciunt ut! Repudiandae facilis iste nisi temporibus dolores laborum accusamus eos vel sunt placeat!</p>
                    <figure><img src="assets/img/cette-semaine.jpg" alt="photo produit de la semaine"></figure>
                    <span class="price">20,50euro</span>
                </section><!-- end this-week-->
                <div class="wrapper">
                <div class="row">
                <section class="news col-6">
                    <article>
                        <h3>Nouveau plat, moule chocolat</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, esse? Enim, eligendi quod repellendus quas deserunt nesciunt ut! Repudiandae facilis iste nisi temporibus dolores laborum accusamus eos vel sunt placeat!</p>
                        <figure><img src="assets/img/plat-3.jpg" alt="photo produit de la semaine"></figure>
                        <span class="price">20,50euro</span>
                    </article>

                    <article>
                            <h3>Nouvelle bière goût amour</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, esse? Enim, eligendi quod repellendus quas deserunt nesciunt ut! Repudiandae facilis iste nisi temporibus dolores laborum accusamus eos vel sunt placeat!</p>
                            <figure><img src="assets/img/brevage.jpg" alt="photo produit de la semaine"></figure>
                            <span class="price">20,50euro</span>
                        </article>
                </section><!-- end news-->
                <section class="events col-6">
                    <article>
                        <h3>Seulement cette semaine !</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, esse? Enim, eligendi quod repellendus quas deserunt nesciunt ut! Repudiandae facilis iste nisi temporibus dolores laborum accusamus eos vel sunt placeat!</p>
                        <figure><img src="assets/img/cette-semaine.jpg" alt="photo produit de la semaine"></figure>
                        <span class="price">20,50euro</span>
                    </article>
                    <article>
                            <h3>Seulement cette semaine !</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, esse? Enim, eligendi quod repellendus quas deserunt nesciunt ut! Repudiandae facilis iste nisi temporibus dolores laborum accusamus eos vel sunt placeat!</p>
                            <figure><img src="assets/img/cette-semaine.jpg" alt="photo produit de la semaine"></figure>
                            <span class="price">20,50euro</span>
                        </article>
                </section><!-- end event-->
            </div><!-- end row -->
        </div><!-- end wrapper-->
            </main>
<?php require "_include/footer.html"; ?>
            

</body>
</html>