<section id="servicios-section" class="container section-container">
    <div class="row">
        <div class="col s12">
            <h3 class="label-section"><i class="fas fa-truck"></i> Vehiculos</h3>
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
        <div class="col s12 m6 offset-m3">
            <div class="video-container mt-3">
                <video src="images/video1.mp4" controls></video>
            </div>
        </div>
    </div>
</section>