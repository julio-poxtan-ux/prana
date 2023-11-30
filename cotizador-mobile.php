<!-- Nivel 4 -->
<div class="modal fade modal-lg cotizador-mobile" id="nivel-4" tabindex="-1" aria-labelledby="nivel-4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-end img-mobile">
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <path fill="#000000" d="M22.7 20L39 36.3l-2.7 2.7L20 22.7 3.7 39 1 36.3 17.3 20 1 3.7 3.7 1 20 17.3 36.3 1 39 3.7z" />
                            </svg>
                        </button>
                    </span>
                </button>
            </div>
            <div class="modal-body image-container">
                <img src="sourse/niveles/nivel-4.png" alt="Nivel 4" class="img-nivel"/>
                <!-- <img src="sourse/niveles/nivel-mobile.svg" alt="Nivel 4" class="img-mobile"/> -->
                <div class="overlay">
                    <div class="row">
                        <div class="col-md-6 order-lg-1 order-sm-4">
                            <div class="btn-container">
                                <button type="button" class="btn btn-disponible btn-up" onclick="mostrarContenido(16)">
                                    <span class="n_dep">404</span>
                                    <br />
                                    <span class="name-dep"> Modelo Lotus (120 m2)</span>
                                    <br />
                                    <span class="info-dep">2 Recámaras / Vista a la fachada</span>
                                    <br />
                                    <br />
                                    <span class="badge-label">DISPONIBLE</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <button type="button" class="btn btn-apartado btn-up" onclick="mostrarContenido(15)">
                                    <span class="n_dep">402</span>
                                    <br />
                                    <span class="name-dep"> Modelo Lotus (120 m2)</span>
                                    <br />
                                    <span class="info-dep">2 Recámaras / Vista a la fachada</span>
                                    <br />
                                    <br />
                                    <span class="badge-label-apartado">APARTADO</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <button type="button" class="btn btn-vendido btn-down">
                                    <span class="n_dep">403</span>
                                    <br />
                                    <span class="name-dep"> Modelo Aura (75 m2)</span>
                                    <br />
                                    <span class="info-dep">1 Recámara / Vista a la fachada</span>
                                    <br />
                                    <br />
                                    <span class="badge-label-vendido">VENDIDO</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <button type="button" class="btn btn-disponible btn-down" onclick="mostrarContenido(13)">
                                    <span class="n_dep">401</span>
                                    <br />
                                    <span class="name-dep"> Modelo Aura (75 m2)</span>
                                    <br />
                                    <span class="info-dep">1 Recámara / Vista a la fachada</span>
                                    <br />
                                    <br />
                                    <span class="badge-label">DISPONIBLE</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-16" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Lotus <span>(130m2)</span></h2>
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>2 cajónes de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,515,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,354,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de Venta: <strong>$4,334,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,167,200.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$180,600.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio final: <strong>$4,153,800.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$3,738,420.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$361,200.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-15" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Lotus <span>(130m2)</span></h2>
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>2 cajónes de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,255,000.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$1,276,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de Venta: <strong>$4,084,800.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$2,127,500.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$170,200.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio final: <strong>$3,914,600.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$3,829,500.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$340,400.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-14" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Aura <span>(75m2)</span></h2>
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,585,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$775,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,481,600.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,292,500.00</strong></h5>
                                    <h5 class="">Descuento: 4% = $103,400.00</h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,378,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,326,500.00 </strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$206,800.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-13" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Aura (75m2)</h2>
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,745,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$823,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,635,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,317,600.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$109,800.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,525,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,272,860.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$219,600.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nivel 4 -->

<!-- Nivel 3 -->
<div class="modal fade modal-lg" id="nivel-3" tabindex="-1" aria-labelledby="nivel-3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-end img-mobile">
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <path fill="#000000" d="M22.7 20L39 36.3l-2.7 2.7L20 22.7 3.7 39 1 36.3 17.3 20 1 3.7 3.7 1 20 17.3 36.3 1 39 3.7z" />
                            </svg>
                        </button>
                    </span>
                </button>
            </div>
            <div class="modal-body image-container">
                <img src="sourse/niveles/nivel-3.png" alt="Nivel 3" class="img-nivel" />
                <div class="overlay">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(12)" class="btn-lotus-l ml_5">
                                    <img src="sourse/buttons/nivel-3-lotus-304.svg" alt="Lotus" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" class="ml_5">
                                    <img src="sourse/buttons/nivel-3-lotus-302.svg" alt="Lotus" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" class="ml_5">
                                    <img src="sourse/buttons/nivel-3-aura-303.svg" alt="Aura" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" class="">
                                    <img src="sourse/buttons/nivel-3-aura-301.svg" alt="Aura" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-12" class="content">
                    <h2 class="fw-bold pt-4">Modelo Lotus <span>(120m2) </span></h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>2 cajónes de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,435,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,330,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,257,600.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,128,800.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$177,400.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,080,200.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$3,672,180.00 </strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$354,800.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-11" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Lotus <span>(120m2)</span></h2>
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>2 cajónes de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,170,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,251,000.00 </strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,003,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,085,000.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$166,800.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$3,836,400.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$3,753,000.00 </strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$333,600.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-10" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Aura <span>(75m2)</span></h2>
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,535,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$760,500.00 </strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,433,600.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$1,267,500.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$101,400.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong> $2,332,200.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$2,281,500.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$202,800.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-9" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Aura <span>(75m2)</span><span class="badge badge-danger">VENDIDO</span></h2>
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,535,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$760,500.00 </strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,433,600.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$1,267,500.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$101,400.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong> $2,332,200.00 </strong></h5>
                                    <h5 class="">Enganche: <strong>$2,281,500.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$202,800.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nivel 3 -->

<!-- Nivel 2 -->
<div class="modal fade modal-lg" id="nivel-2" tabindex="-1" aria-labelledby="nivel-2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-end img-mobile">
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <path fill="#000000" d="M22.7 20L39 36.3l-2.7 2.7L20 22.7 3.7 39 1 36.3 17.3 20 1 3.7 3.7 1 20 17.3 36.3 1 39 3.7z" />
                            </svg>
                        </button>
                    </span>
                </button>
            </div>
            <div class="modal-body image-container">
                <img src="sourse/niveles/nivel-2.png" alt="Nivel 2" class="img-nivel" />
                <div class="overlay">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(8)" class="btn-lotus-l ml_5">
                                    <img src="sourse/buttons/nivel-2-lotus-204.svg" alt="Lotus" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(7)" class="btn-lotus-l ml_5">
                                    <img src="sourse/buttons/nivel-2-lotus-202.svg" alt="Lotus" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(6)" class="btn-aura-r ml_5"> <img src="sourse/buttons/nivel-2-aura-203.svg" alt="Aura" /></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(5)" class="btn-aura-r ml_5">
                                    <img src="sourse/buttons/nivel-2-aura-201.svg" alt="Aura" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-8" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Lotus <span>(120m2)</span></h2>
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,435,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,330,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,257,600.00</strong></h5>
                                    <h5 class="">Enganche: <strong> $2,128,800.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$177,400.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,080,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$3,672,180.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$354,800.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-7" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Lotus (120m2)</h2>
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,435,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,330,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,257,600.00</strong></h5>
                                    <h5 class="">Enganche: <strong> $2,128,800.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$177,400.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,080,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$3,672,180.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$354,800.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-6" class="content">
                    <h2 class="fw-bold pt-4">Modelo Aura <span>(75m2)</span></h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,695,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$808,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong> $2,587,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong> $1,293,600.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$107,800.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,479,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,231,460.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$215,600.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-5" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Aura <span> (75m2)</span></h2>
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,695,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$808,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong> $2,587,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong> $1,293,600.00</strong></h5>
                                    <h5 class="">Descuento: 4% = $107,800.00</h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,479,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,231,460.00</strong></h5>
                                    <h5 class="">Descuento: 8% = $215,600.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nivel 2 -->

<!-- Nivel 1 -->
<div class="modal fade modal-lg" id="nivel-1" tabindex="-1" aria-labelledby="nivel-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-end img-mobile">
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <path fill="#000000" d="M22.7 20L39 36.3l-2.7 2.7L20 22.7 3.7 39 1 36.3 17.3 20 1 3.7 3.7 1 20 17.3 36.3 1 39 3.7z" />
                            </svg>
                        </button>
                    </span>
                </button>
            </div>
            <div class="modal-body image-container">
                <img src="sourse/niveles/nivel-1.png" alt="Nivel 1" class="img-fluid img-nivel" />
                <!-- <img src="sourse/niveles/mobile-niveles.jpg" alt="nivel 1" class="img-fluid img-mobile"> -->
                <div class="overlay">
                    <div class="row box-row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(1)" class="btn-lotus-l ml_5">
                                    <img src="sourse/buttons/nivel-1-lotus-104.svg" alt="Lotus" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(2)" class="btn-lotus-l ml_5">
                                    <img src="sourse/buttons/nivel-1-lotus-102.svg" alt="Lotus" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(3)" class="btn-aura-r ml_5">
                                    <img src="sourse/buttons/nivel-1-aura-103.svg" alt="Aura" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-container">
                                <a type="button" onclick="mostrarContenido(4)" class="btn-aura-r ml_5">
                                    <img src="sourse/buttons/nivel-1-aura-101.svg" alt="Aura" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-1" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Lotus <span>(130m2)</span></h2>
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>2 cajónes de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,515,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,354,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,334,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,167,200.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$180,600.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,153,800.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$3,738,420.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$361,200.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-2" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Lotus <span>(130m2)</span></h2>
                            <img src="sourse/niveles/lotus-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>2 cajónes de estacionamiento techado.</li>
                                <li>2 Recamaras.</li>
                                <li>2.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,515,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,354,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,334,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,167,200.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$180,600.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$4,153,800.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$3,829,500.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$361,200.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-3" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Aura <span>(75m2)</span></h2>
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,745,000.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$823,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,635,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$1,317,600.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$109,800.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,525,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,272,860.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$219,600.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
                <div id="content-4" class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="fw-bold">Modelo Aura <span>(75m2)</span></h2>
                            <img src="sourse/niveles/aura-min.png" class="img-fluid" alt="Departamento LOTUS" />
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Caracteristicas</h3>
                            <ul class="lista-room pt-5">
                                <li>1 cajón de estacionamiento techado.</li>
                                <li>1 Recamara.</li>
                                <li>1.5 Baños.</li>
                                <li>Sala comedor corrido.</li>
                                <li>Walk in closet.</li>
                                <li>Área de lavado.</li>
                                <li>Isla de granito en cocina.</li>
                                <li>Terraza.</li>
                                <li>Espacio para instalar un closet de blancos.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="fw-bold">Cotiza aquí</h3>
                            <!-- <button onclick="mostrarContenido(null)">Mostrar todos los botones</button> -->
                            <a href="#precios30" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                30% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                70% contraentrega
                            </a>
                            <div id="precios30" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,745,000.00 </strong></h5>
                                    <h5 class="">Enganche: <strong> $823,500.00</strong></h5>
                                    <h5 class="">Descuento: 0%</h5>
                                </div>
                            </div>
                            <a href="#precios50" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                50% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                50% contraentrega
                            </a>
                            <div id="precios50" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong> $2,635,200.00</strong></h5>
                                    <h5 class="">Enganche: <strong> $1,317,600.00</strong></h5>
                                    <h5 class="">Descuento: 4% = <strong>$109,800.00</strong></h5>
                                </div>
                            </div>
                            <a href="#precios90" class="btn btn-lg btn-prana mt-4 dropdown-i" data-bs-toggle="collapse">
                                90% de enganche <img src="sourse/down-icon.svg" alt="" /><br />
                                10% contraentrega
                            </a>
                            <div id="precios90" class="collapse">
                                <div class="p-4 info-precios">
                                    <h5 class="">Precio de venta: <strong>$2,525,400.00</strong></h5>
                                    <h5 class="">Enganche: <strong>$2,272,860.00</strong></h5>
                                    <h5 class="">Descuento: 8% = <strong>$219,600.00</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <button type="button" class="btn btn-secondary" onclick="regresar()">
                        <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0L0 4L4 8V5H16V3H4V0Z" fill="white" />
                        </svg>
                        Regresar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nivel 1 -->

<div class="modal modal-lg fade" id="avisodeprivacidad" tabindex="-1" role="dialog" aria-labelledby="avisodeprivacidadTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center">POLÍTICA DE PRIVACIDAD</h1>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <path fill="#000000" d="M22.7 20L39 36.3l-2.7 2.7L20 22.7 3.7 39 1 36.3 17.3 20 1 3.7 3.7 1 20 17.3 36.3 1 39 3.7z" />
                            </svg>
                        </button>
                    </span>
                </button>
            </div>
            <div class="modal-body p-5">
                <p>
                    En LUVORA, nos tomamos muy en serio la privacidad de nuestros usuarios y la protección de sus datos personales. Esta Política de Privacidad tiene como objetivo proporcionar información clara y transparente sobre cómo
                    recopilamos, utilizamos, divulgamos, transferimos y almacenamos los datos personales de los usuarios que visitan nuestro sitio web.
                </p>

                <h2>1. INFORMACIÓN RECOPILADA</h2>
                <p>
                    Cuando los usuarios visitan nuestro sitio web, podemos recopilar cierta información personal que nos proporcionan de forma voluntaria, como nombre, dirección de correo electrónico, número de teléfono y cualquier otra
                    información que decidan compartir con nosotros a través de formularios de contacto o suscripción a boletines informativos.
                </p>
                <p>
                    Además de la información personal proporcionada de forma voluntaria, también recopilamos automáticamente ciertos datos técnicos y de navegación, como la dirección IP del dispositivo, tipo de navegador, proveedor de
                    servicios de Internet, páginas de referencia/salida y registros de fecha/hora. Esta información se recopila de forma anónima y se utiliza para fines estadísticos y de análisis, con el objetivo de mejorar constantemente
                    la experiencia del usuario en nuestro sitio web.
                </p>

                <h2>2. USO DE LA INFORMACIÓN</h2>
                <p>La información personal recopilada se utilizará exclusivamente para los siguientes propósitos:</p>
                <ul>
                    <li>Responder a consultas y brindar asistencia solicitada por los usuarios.</li>
                    <li>Enviar comunicaciones promocionales, actualizaciones y boletines informativos sobre nuestros productos y servicios, siempre y cuando se haya otorgado el consentimiento previo del usuario.</li>
                    <li>Mejorar y personalizar la experiencia del usuario en nuestro sitio web.</li>
                    <li>Proteger nuestros derechos legales y cumplir con las obligaciones legales y reglamentarias.</li>
                </ul>

                <h2>3. DIVULGACIÓN DE LA INFORMACIÓN</h2>
                <p>No compartiremos, venderemos ni alquilaremos la información personal de los usuarios a terceros sin su consentimiento expreso, excepto en los siguientes casos:</p>
                <ul>
                    <li>Cuando sea necesario para cumplir con las leyes y regulaciones aplicables, responder a solicitudes legales y proteger nuestros derechos legales.</li>
                    <li>Cuando sea necesario compartir la información con proveedores de servicios de confianza que trabajan en nombre de LUVORA para mejorar nuestros productos y servicios.</li>
                    <li>En caso de una fusión, adquisición o venta de la totalidad o parte de nuestros activos, siempre y cuando se respeten los principios y salvaguardias establecidos en esta Política de Privacidad.</li>
                </ul>

                <h2>4. SEGURIDAD DE LA INFORMACIÓN</h2>
                <p>
                    Implementamos medidas de seguridad técnicas, administrativas y físicas para proteger la información personal contra acceso no autorizado, pérdida, alteración o destrucción. Sin embargo, no podemos garantizar la seguridad
                    absoluta de la información transmitida a través de Internet o almacenada electrónicamente. Los usuarios son responsables de mantener la confidencialidad de sus credenciales de acceso y comunicarse con nosotros de
                    inmediato si sospechan algún uso no autorizado de su cuenta.
                </p>

                <h2>5. ENLACES A SITIOS WEB DE TERCEROS</h2>
                <p>
                    Nuestro sitio web puede contener enlaces a sitios web de terceros. Esta Política de Privacidad no se aplica a esos sitios web, por lo que le recomendamos revisar las políticas de privacidad correspondientes a esos sitios
                    antes de proporcionarles su información personal.
                </p>

                <h2>6. MENORES DE EDAD</h2>
                <p>
                    No recopilamos de manera intencional información personal de menores de 18 años. Si usted es padre o tutor y cree que su hijo ha enviado información personal favor de comunicarse para tener una pronta respuesta, al igual
                    que no nos hacemos responsables de cualquier información que el menor de edad haya recopilado en nuestra página web.
                </p>

                <h2>7. MEDIOS PARA LIMITAR EL USO O DIVULGACIÓN DE DATOS PERSONALES</h2>
                <p>
                    LUVORA cuenta con medidas físicas, técnicas y administrativas de seguridad para la protección de Datos Personales proporcionados por los clientes. Si usted desea dejar de recibir mensajes promocionales vía correo
                    electrónico y/o de forma impresa y/o vía telefónica por parte de nosotros puede solicitarlo a través del correo: contacto@luvora.com.mx.
                </p>

                <h2>8. TRANSFERENCIA DE DATOS PERSONALES</h2>
                <p>
                    LUVORA podrá revelar, divulgar y/o transferir dentro y fuera del país los Datos Personales (con excepción de los Datos financieros) proporcionados por los clientes a un tercero, incluyendo sin limitar, a sus empresas
                    filiales, subsidiarias y/o relacionadas, así como a proveedores, patrocinadores, publicistas, contratistas y/o socios comerciales para fines comerciales, como proporcionar datos estadísticos a anunciantes potenciales,
                    enviar publicidad a los clientes de acuerdo a sus intereses específicos, conducir investigaciones de mercado, y otras actividades o promociones que LUVORA considere apropiadas. Los terceros que reciban la información
                    relacionada con los Datos Personales de los clientes están obligados a cumplir con lo previsto en este Aviso de Privacidad, así como con los Términos y Condiciones del Sitio y de la legislación aplicable en México. El
                    titular de los Datos Personales proporcionados a través del Sitio acepta su transferencia en los términos descritos en el presente Aviso.
                </p>

                <h2>9. TRANSFERENCIA INTERNACIONAL DE DATOS</h2>
                <p>
                    Es posible que transfiramos y almacenemos la información personal recopilada en servidores ubicados en diferentes jurisdicciones, incluidas aquellas fuera de su país de residencia. Tomaremos todas las medidas razonables
                    para garantizar que se apliquen los niveles adecuados de protección de datos a cualquier transferencia de información personal.
                </p>

                <h2>10. MEDIOS PARA EJERCER LOS DERECHOS DE LOS TITULARES DE DATOS PERSONALES Y REVOCACIÓN DEL CONSENTIMIENTO</h2>
                <p>En virtud de que LUVORA en todo momento trata los Datos Personales conforme a la legislación aplicable, en todo momento los clientes tienen derecho a:</p>
                <ul>
                    <li>Acceder a sus Datos Personales.</li>
                    <li>Rectificar sus Datos Personales cuando sean inexactos o incompletos.</li>
                    <li>Cancelar sus Datos Personales.</li>
                    <li>
                        Oponerse por causa legítima al Tratamiento de sus Datos Personales, y/o Revocar su consentimiento para el tratamiento de sus Datos Personales en cualquier momento, a fin de que se deje de hacer uso de los mismos.
                    </li>
                </ul>
                <p>
                    El ejercicio de los derechos de Acceso, Rectificación, Cancelación u Oposición de Datos Personales y Revocación del consentimiento que realicen los clientes deberá realizarse previa solicitud a LUVORA y contener al menos
                    lo siguiente:
                </p>
                <ul>
                    <li>El nombre del titular, domicilio y correo electrónico para comunicarle la respuesta a su solicitud.</li>
                    <li>Los documentos que acrediten la identidad o, en su caso, la representación legal del titular.</li>
                    <li>
                        La descripción clara y precisa de los Datos Personales respecto de los que se busca ejercer alguno de los derechos antes mencionados (en el caso de rectificación se deberá indicar las modificaciones a realizar y
                        aportar la documentación que sustente su petición).
                    </li>
                    <li>Cualquier otro elemento o documento que facilite la localización de los datos personales.</li>
                </ul>
                <p>
                    Para efecto de lo anterior LUVORA pone a disposición de los clientes el siguiente correo electrónico: contacto@luvora.com.mx, LUVORA dará respuesta a la solicitud de los clientes en un plazo no mayor a 15 días hábiles
                    contados a partir de la fecha en que reciba la petición correspondiente, a través del correo electrónico que haya sido proporcionado para tal efecto.
                </p>
                <p>El ejercicio por parte de los clientes de los derechos antes mencionados deberá sujetarse a las leyes y reglamentos aplicables vigentes en México.</p>

                <h2>11. DATOS PERSONALES SENSIBLES</h2>
                <p>
                    De conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, como "Datos Personales Sensibles" se entiende a: "aquellos que puedan revelar aspectos como origen racial o étnico,
                    estado de salud presente y futuro, información genética, creencias religiosas, filosóficas y/o morales, afiliación sindical, opiniones políticas, preferencia sexual". En caso de que LUVORA llegue a requerir Datos
                    Personales Sensibles de los clientes, estos deberán proporcionar su consentimiento expreso.
                </p>

                <h2>12. CAMBIOS AL AVISO DE PRIVACIDAD</h2>
                <p>
                    LUVORA se reserva el derecho de modificar en cualquier momento el contenido del presente Aviso de Privacidad. Cualquier cambio en el Aviso de Privacidad le será informado a sus clientes enviando un aviso personal. Una
                    vez que se conozca el Aviso de Privacidad y esté firmado por el cliente entrará en vigor automáticamente.
                </p>
            </div>
        </div>
    </div>
</div>
