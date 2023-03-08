<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Adresse:</h4>
                        <p>58 rue de bretagne, Lens 62300</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>baptistedupache@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Téléphone:</h4>
                        <p>+33 06 23 63 08 86</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68381.90876490044!2d2.8281718185941482!3d50.436296922658435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd305f6f4ca1b9%3A0x40af13e8163e670!2sLens!5e0!3m2!1sfr!2sfr!4v1678194215288!5m2!1sfr!2sfr"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="assets/php/php-email-form.php" method="post" role="form" class="php-email-form">
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="name">Votre nom</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Votre E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Sujet</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="groupe" class="test">Type de contrat.</label>
                        <select name="groupe" id="groupe">
                            <option value="0">Veuillez sélectionner le type de contrat</option>
                            <option value="1">Stage</option>
                            <option value="2">Alternance</option>
                            <option value="3">Les deux</option>
                        </select>
                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Votre message à bien était envoyer. Merci!</div>
                    </div>
                    <div class="text-center"><button type="submit" value="Enregistrer">Envoyer un message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>