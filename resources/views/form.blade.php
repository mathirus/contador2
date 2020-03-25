<section id="footer" class="section footer pad-top40">




    <div class="container  section appear clearfix" id="section-contact" >
        <div class="col-md-12 text-center pad-top40 pad-bot40">
            <br>
            <h2>Contacto</h2>
        </div>



        <div class="col-md-6"  data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <form  method="POST" target="">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nombre">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Movil</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="telefono">
                </div>



                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Describa su consulta</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="consulta" ></textarea required>
                </div>

                <button type="submit" class="btn btn-primary" value="enviarconsulta">Enviar consulta</button>
            </form>

        </div>


        <div class="col-md-6 text-center" data-aos="fade-left"   data-aos-duration="1000" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26260.639228351112!2d-58.522723!3d-34.640055!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc847a965bea5%3A0xaaf9879a1f280769!2sRamon+Falcon+6835%2C+C1408DSC+CABA!5e0!3m2!1ses-419!2sar!4v1542514796200" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

            <p>RAMON FALCON 6835 4ºB CABA - LINIERS</p>

        </div>




    </div>









    <div class="row-md-12 text-center">

        <ul>
            <a href="mailto:hernan@tucontadorpublico.com.ar" class="amail" target="_blank"><li class="redes"><i class="fas fa-mail-bulk"></i>Hernan@Tucontadorpublico.com.ar</li></a>
            <a href="#tel:4643-9144" target="_blank" class="atelefono"><li class="redes"><i class="fas fa-phone-volume"></i> 4643-9144</li></a>
            <a href="https://api.whatsapp.com/send?phone=5491151036034&text=Buenas, te escribo desde la pagina web, tengo una consulta:"  target="_blank" class="awhatsapp"><li class="redes"><i class="fab fa-whatsapp"></i> 11-5103-6034</li></a>
            <a href="https://www.youtube.com/channel/UCkhn27N1YcIEcWwKEDmWamA" target="_blank" class="ayoutube"><li class="redes"><i class="fab fa-youtube"></i>Videos</li></a>
            <a href="https://www.facebook.com/tucontadorpublico/" target="_blank"  class="afacebook"><li class="redes" ><i class="fab fa-facebook-square"></i> Facebook</li></a>
        </ul>
        <br>
        <p class="text-center"> © Todos los derechos reservados. © Design: Tu Contador Publico </p>
        <br><br>
    </div>



</section>




<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
