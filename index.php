<?php
include("include/header.php");
?>
    <div class="postion">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item text-center active">
            <h1 class="color size3">voila ma premier page</h1>
            <hr>
            <p class='size'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsa et quo incidunt
              perspiciatis neque molestias repellendus cupiditate architecto molestiae fugiat quae possimus, quaerat
              rerum quibusdam quos iusto.</p>
          </div>
          <div class="carousel-item text-center">
            <h1 class="color size3">voila ma premier page</h1>
            <hr>
            <p class='size'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsa et quo incidunt
              perspiciatis neque molestias repellendus cupiditate architecto molestiae fugiat quae possimus, quaerat
              rerum quibusdam quos iusto.</p>
          </div>
          <div class="carousel-item text-center">
            <h1 class="color size3">voila ma premier page</h1>
            <hr>
            <p class='size'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsa et quo incidunt
              perspiciatis neque molestias repellendus cupiditate architecto molestiae fugiat quae possimus, quaerat
              rerum quibusdam quos iusto.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="mouve">
        <a href="#hero"><i class="fas fa-arrow-down agrandir" id="arrow"></i></a>
      </div>
  </header>
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6">
          <img src="img/lelogo.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-12 col-sm-6">
          <h2 class="font-weight-bold">OUR STORY</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia pariatur, et sit nisi quaerat distinctio
            beatae nostrum minus nobis eius eos sed molestiae doloribus a culpa, dolor eligendi saepe optio!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad harum hic explicabo consequuntur excepturi
            aliquam, error molestiae, soluta eum autem corrupti, doloribus inventore quisquam assumenda distinctio quos
            quasi sequi!</p>
          <button type="button" class="btn btn-outline-danger" onclick="window.location.href='404.php'">CLICK MOI</button>
        </div>
      </div>
      <div class="text-center marge">
        <h2 class="font-weight-bold">EXPERTISE</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing, iste nesciunt.</p>
        <hr>
      </div>
    </div>
    <div class="container">
      <div class="row paddingBottom">
        <div class="col-12 col-sm-4">
          <div class="card text-center mobile" style="width: 18rem;">
            <a href="404.php"><i class="fas fa-mobile-alt pixel" title="Mobile first"></i></a>
            <div class="card-body">
              <h5 class="card-title font-weight-bold">MOBILE APP</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="card text-center mobile" style="width: 18rem;">
            <a href="formulaire.php"><i class="far fa-envelope pixel" title="Contact" ></i></a>
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of thecard's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="card text-center mobile" style="width: 18rem;">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f pixel" title="Facebook"></i></a>
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of thecard's
                content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="hero2">
    <div class="text-center marginMobile">
      <h2 class="font-weight-bold">PARTENAIRE</h2>
      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing, iste nesciunt.</p>
      <hr>
      <br>
    </div>
    <div class="row paddingMobile ">
      <div class="col-sm paddingCard">
        <div class="card card2 mobile " style="width: 18rem;">
          <img src="https://qwizzeria.com/wp-content/uploads/2017/09/Lorem-ipsum.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card card2 mobile" style="width: 18rem;">
          <img src="data:image/png;base64,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" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card card2 mobile" style="width: 18rem;">
          <img src="https://qwizzeria.com/wp-content/uploads/2017/09/Lorem-ipsum.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card card2 mobile" style="width: 18rem;">
          <img src="data:image/png;base64,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" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
    </div>
    <?php
include("include/footer.php");
?>
</section>
