<section id="contacto-section" class="container section-container">
    <div class="card card-contact">
        <div class="row">
            <form class="col s12 m8 offset-m2">
                <div class="row">
                    <div class="col s12">
                        <h3 class="label-section"><i class="far fa-envelope"></i> Contácto</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="nombre" id="nombre" type="text" class="validate">
                        <label for="name">Nombre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="asunto" name="asunto" type="text" class="validate">
                        <label for="asunto">Asunto</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                        <label for="message">Mensaje</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="waves-effect waves-light btn btn-large <?php echo $main_color ?>">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>