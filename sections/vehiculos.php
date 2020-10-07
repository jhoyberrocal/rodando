<section id="servicios-section" class="container section-container">
    <div class="row">
        <div class="col s12">
            <h3 class="label-section">
                <img src="images/mini-furgoneta.svg" alt="Vehículos de carga rodando express">
                Vehículos de carga
            </h3>
        </div>
        <div class="col s12 m8 offset-m2">
            <p class="center-align text-intro">Contamos con las mejores referencias de vehículos para que inicie su proyecto de ser independiente o de invertir de acuerdo a sus necesidades.</p>
        </div>
        <div class="col s12">
            <div class="carousel jh-carousel">
                <?php for($i = 0; $i <= 10; $i++){ ?>
                    <a class="carousel-item" href="javascript:void(0)">
                        <img src="images/vehiculos/vehiculos-<?php echo $i + 1?>.jpeg">
                    </a>
                <?php }?>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="video-cont mt-3">
                <video src="images/vehiculos1.mp4" controls></video>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="video-cont mt-3">
                <video src="images/vehiculos2.mp4" controls></video>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h3 class="label-section">
                <img src="images/recoleccion.svg" alt="Vehículos de carga rodando express">
                Vehículos doble cabina
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <img class="materialboxed responsive-img" src="images/img1.jpeg">
        </div>
        <div class="col s12 m6">
            <img class="materialboxed responsive-img" src="images/img2.jpeg">
        </div>
    </div>
</section>