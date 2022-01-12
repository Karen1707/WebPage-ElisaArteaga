<!DOCTYPE html>
<html>
    <?php
        include "head.html";
        include "menu.html";
    ?>

    <div class="container bodyFooter"> 
        <div id="headerContacto" class="row">
            <img src="img/Contactanos.svg" class="col-lg-4" alt="">
        </div>
        <div class="row">
            <div class="col-lg-4" id="textContact">
                <p>¿Tienes alguna duda?, ¿Deseas hacer equipo? escríbeme y pongámonos en contacto, será un gusto trabajar contigo y hacer ese sueño realidad.</p>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <form>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="name">
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="phone">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Asunto</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Método de contacto</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Email</option>
                            <option value="2">Llamada teléfonica</option>
                            <option value="3">Mensaje por Whatsapp</option>
                          </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Mensaje</label>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>

                <!--<form action="">
                    <label for="name">Nombre</label>
                    <input id="name" type="text">
                    <small class="error"></small>
        
                    <label for="mail">Email</label>
                    <input id="mail" type="text">
                    <small class="error"></small>
        
                    <label for="telephone">Teléfono</label>
                    <input id="telephone" type="text">
                    <small class="error"></small>
        
                    <label for="subject">Asunto</label>
                    <input id="subject" type="text">
                    <small class="error"></small>
        
                    <label for="message">Mensaje</label>
                    <textarea name="" id="message" cols="30" rows="10"></textarea>
                    <small class="error"></small>
        
                    <div>
                        <input type="submit">
                    </div>
                </form>-->
            </div>
        </div>  
        
    </div>
    <?php
        include "footer.html"
    ?>
</html>