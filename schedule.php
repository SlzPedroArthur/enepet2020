<?php include "header.php"?>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Programação do Evento</h1>
                        <p>Confira a programação completa do Encontro Regional de PETs 2020! Aqui você vizualizar e baixar a programação oficial.</p>
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid first">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id01').style.display='block'" src="images/day1.png" class="img-fluid" alt="Image">
                            <div id="id01" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/day1.png" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Primeiro dia</h4>
                            <h5> Sáb, 18/04</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid second">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id02').style.display='block'" src="images/day2.png" class="img-fluid" alt="Image">
                            <div id="id02" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/day2.png" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Segundo dia</h4>
                            <h5> Dom, 19/04</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid third">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id03').style.display='block'" src="images/day3.png" class="img-fluid" alt="Image">
                            <div id="id03" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/day3.png" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Terceiro dia</h4>
                            <h5> Seg, 20/04</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fourth">
                    <div class="products-single fix">
                        <div class="btn-wrap">
                            <img onclick="document.getElementById('id04').style.display='block'" src="images/day4.png" class="img-fluid" alt="Image">
                            <div id="id04" class="modal">
                                <div class="modal-content animate">
                                    <img src="images/day4.png" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Quarto dia</h4>
                            <h5> Ter, 21/04</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <?php include "footer.php" ?>
