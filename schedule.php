<?php include "header.php"?>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Programação do Evento</h1>
                        <p>Confira a programação completa do Encontro Regional de PETs 2020! Aqui você vizualiza e baixa a programação oficial.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Todos</button>
                            <button data-filter=".first">1 Dia</button>
                            <button data-filter=".second">2 Dia</button>
                            <button data-filter=".third">3 Dia</button>
                            <button data-filter=".fourth">4 Dia</button>
                            <button data-filter=".fifth">5 Dia</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid first">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id01').style.display='block'" src="images/sabado1.PNG" class="img-fluid" alt="Image">
                            <div id="id01" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/sabado1.PNG" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Primeiro dia</h4>
                            <h5> Sáb, 10/10</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid second">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id02').style.display='block'" src="images/domingo1.PNG" class="img-fluid" alt="Image">
                            <div id="id02" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/domingo1.PNG" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Segundo dia</h4>
                            <h5> Dom, 11/10</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid third">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id03').style.display='block'" src="images/sabado2.png" class="img-fluid" alt="Image">
                            <div id="id03" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/sabado2.png" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Terceiro dia</h4>
                            <h5> Sáb, 17/10</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid fourth">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id04').style.display='block'" src="images/domingo2.png" class="img-fluid" alt="Image">
                            <div id="id04" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/domingo2.png" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Quarto dia</h4>
                            <h5> Dom, 18/10</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fifth">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id05').style.display='block'" src="images/sabado3.png" class="img-fluid" alt="Image">
                            <div id="id05" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/sabado3.png" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Quinto dia</h4>
                            <h5> Sáb, 24/10</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <?php include "footer.php" ?>
