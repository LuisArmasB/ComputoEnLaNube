<!DOCTYPE html>
<html lang="en">
<head>
    <!--Autor: Armas Barragan Luis Fernando (Mitol Polo)-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cómputo en la nube</title>
    <link rel="shortcut icon" href="cloud2.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-xmYGgXswDtpZJkV2ZxK//xYiO6leInOeLPI72LGxzk/y3gMniUzFwh1wkSHPMOqO" crossorigin="anonymous">
</head>
<body>
    
    <header class="title">
                    <img src="logo.png" alt="LogoTec" class="logoTec">
                    <div class="contenedor-imagen">
                        <img src="cloud2.png" alt="Cloud" style="width:20%;">
                        <div class="centrado"><h1>Cómputo en la nube y Servicios</h1></div>
                    </div>

                    <div>
                    <nav class="barraNav">
                        <ul>
                            <a href="#generalConcept"><li class="menuItem">Conceptos generales</li></a>
                            <a href="#serviceTypes"><li class="menuItem">Tipos de servicios</li></a>
                            <a href="#designPatterns"><li class="menuItem">Patrones de diseño</li></a>
                            <a href="#serviceStandard"><li class="menuItem">Estándares de servicio</li></a>
                            <li class="menuItem" id="openPopup">Referencias</a>
                        </ul>    

                    </nav>    
                    
                    <div>

                    



    </header>
    <section class="generalConcept" id="generalConcept">
    <div class="title1">
            <h2>CloudComputing (Cómputo en la nube)</h2>
             <p class="desc1">Un servicio de la nube es un conjunto de recursos informáticos que se ofrece mediante Internet. En lugar de ejecutar aplicaciones o guardar datos en servidores locales o dispositivos físicos, se accede a estos recursos de manera remota utilizando la infraestructura en la nube.</p>
            <h3>Tipos de nube</h3>
            <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Nube pública
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                   En ellas los recursos informáticos, como servidores, almacenamiento y aplicaciones, son propiedad y administrados por un proveedor de servicios en la nube y se ofrecen a través de Internet para ser utilizados por empresas y usuarios finales.
                   En una nube pública, los recursos informáticos están disponibles para el público en general. Esto significa que cualquier persona o empresa puede acceder a estos recursos pagando por su uso según una estructura de precios establecida por el proveedor de servicios en la nube. Los servicios en la nube pública suelen estar disponibles para su contratación bajo demanda, lo que permite a los usuarios escalar y ajustar la capacidad de los recursos según sus necesidades en un momento dado.
                   Algunos ejemplos populares de proveedores de servicios en la nube pública incluyen Amazon Web Services (AWS), Microsoft Azure, Google Cloud Platform (GCP) y IBM Cloud. Estos proveedores ofrecen una amplia gama de servicios, como almacenamiento, servidores virtuales, bases de datos, herramientas de desarrollo y más, que se pueden utilizar para alojar aplicaciones, almacenar datos y ejecutar cargas de trabajo en la nube.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Nube privada
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                  
                La nube privada es un modelo de servicio en la nube en el cual los recursos informáticos son exclusivos de una sola organización. Estos recursos se implementan en infraestructuras locales o en centros de datos privados, lo que permite a la organización tener un control completo sobre su entorno de nube. La nube privada ofrece mayor seguridad y privacidad, ya que solo se accede a los recursos por parte de la organización propietaria. Además, permite personalizar y adaptar los servicios de acuerdo con las necesidades específicas de la organización. Sin embargo, la nube privada puede requerir una inversión significativa en infraestructura y mantenimiento por parte de la organización.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Nube hibrida
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                La nube híbrida es un enfoque de computación en la nube que combina tanto recursos de la nube pública como de la nube privada. En una nube híbrida, una organización puede utilizar recursos de la nube pública para ciertas cargas de trabajo y recursos de la nube privada para otras. Esto permite una mayor flexibilidad y escalabilidad, ya que las organizaciones pueden aprovechar la nube pública para cargas de trabajo con fluctuaciones de demanda, mientras mantienen el control y la seguridad de datos sensibles en la nube privada. La nube híbrida también permite la interoperabilidad entre los entornos de nube pública y privada, lo que permite a las organizaciones mover y administrar sus cargas de trabajo de manera eficiente según sus necesidades específicas. Sin embargo, la implementación y gestión de una nube híbrida puede ser compleja, ya que requiere una integración adecuada de los recursos y la garantía de la compatibilidad entre los entornos de la nube pública y privada.
                </div>
                </div>
            </div>
            </div>




    </div>

    </section>



    <section class="serviceTypes" id="serviceTypes">
            <div class="title2"><h2>Tipos de Servicios de la Nube</h2>
            <p class="desc1">
            Cada tipo de servicio en la nube y método de implementación le aporta distintos niveles de control, flexibilidad y administración.
            </p>
            
            <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                <div class="card-body">
                    <img src="IaaS.png" alt="IaaS" class="imageCard">
                    <h5 class="card-title">Infraestructura como Servicio (IaaS)</h5>
                    <p class="card-text descripcion">Los proveedores de servicios en la nube ofrecen una infraestructura de TI completa a través de Internet. Esto incluye servidores virtuales, almacenamiento, redes y otros recursos necesarios para ejecutar aplicaciones y sistemas. Los usuarios tienen un control más granular sobre la configuración y el despliegue de los componentes de la infraestructura.</p>
                    <p><h6>Ejemplos:</h6></p>
                    <p>Amazon Web Services (AWS) EC2, Microsoft Azure VM y Google Compute Engine.</p>
                    <a href="https://cloud.google.com/learn/what-is-iaas?hl=es#:~:text=La%20infraestructura%20como%20servicio%20(IaaS,a%20través%20de%20la%20nube." target="_blank" class="btn btn-primary">Más información</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <img src="PaaS.png" alt="IaaS" class="imageCard">
                    <h5 class="card-title">Plataforma como Servicio (PaaS)</h5>
                    <p class="card-text descripcion">Los proveedores de servicios en la nube ofrecen una plataforma completa de desarrollo y ejecución de aplicaciones. Los usuarios pueden crear, probar y desplegar aplicaciones sin preocuparse por la infraestructura subyacente. La plataforma proporciona entornos de ejecución, lenguajes de programación, bases de datos y herramientas de desarrollo.</p>
                    <p><h6>Ejemplos:</h6></p>
                    <p>AWS Elastic Beanstalk, Google App Engine y Heroku.</p>
                    <a href="https://cloud.google.com/learn/what-is-paas?hl=es#:~:text=Plataforma%20como%20servicio%20(PaaS)%20es,%2C%20middleware%2C%20herramientas%20y%20más." class="btn btn-primary">Más información</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <img src="PaaS.png" alt="IaaS" class="imageCard">
                    <h5 class="card-title">Software/Code como Servicio (SaaS)</h5>
                    <p class="card-text descripcion">Los proveedores de servicios en la nube ofrecen aplicaciones completas a través de Internet. Los usuarios acceden y utilizan estas aplicaciones a través de un navegador web sin necesidad de instalar software adicional en sus dispositivos. Los proveedores se encargan de la infraestructura, el mantenimiento y la actualización de la aplicación.</p>
                    <p><h6>Ejemplos:</h6></p>
                    <p>Gmail, Azure, Google Workspace y (CRM) como Salesforce.</p>
                    <a href="https://aws.amazon.com/es/what-is/saas/#:~:text=para%20crear%20SaaS%3F-,¿Qué%20es%20SaaS%3F,acceder%20a%20ellos%20bajo%20demanda." class="btn btn-primary">Más información</a>
                </div>
                </div>
            </div>
            </div>


            </div>


    </section>

    <section id="designPatterns" class="designPatterns">


        <table class="table">
            <tr>
                <td class="tableColor">
                    <div class="title3"><h2>Patrones de diseño</h2>
                        <img src="patron.png" alt="" class="patronImg">
                        <p class="desc1">"Soluciones probadas y comúnmente aceptadas para problemas recurrentes en el diseño de software"</p>
                    </div>
                </td>
                <td class="tableColor">
                            <div class="desc2">
                                Los patrones de diseño (design patterns) son soluciones
                                habituales a problemas comunes en el diseño de
                                software. Cada patrón es como un plano que se
                                puede personalizar para resolver un problema de
                                diseño particular de tu código.

                                Los patrones de diseño varían en su complejidad,
                                nivel de detalle y escala de aplicabilidad.
                                Además, pueden clasificarse por su
                                propósito y dividirse en tres grupos. (Patrones de creación, patrones de diseño de fabrica, patrones de comportamiento)
                            <div>
                        <a href="https://refactoring.guru/es/design-patterns"><input type="button" value="Más información" class="btnPatron btn btn-primary"></a>
                    </div>
                </div>
           
                </td>

            </tr>

        </table>
    
      
    </section>
    <section id="serviceStandard" class="serviceStandard">
        <div class="title4"> 
            <table class="table">
                <tr>
                    <td class="tableColor">  
                        <div class="desc2">                  
                        Estos estándares son ampliamente aceptados y adoptados por la industria para promover la consistencia y la excelencia en la prestación de servicios.

                        En el ámbito de los servicios en la nube, existen varios estándares importantes que abordan diferentes aspectos del servicio. Algunos de los estándares relevantes son:
                            <ol>
                                <li>
                        <strong class="normas">ISO/IEC 27001</strong>: Este estándar se centra en la seguridad de la información y establece los requisitos para establecer, implementar, mantener y mejorar un sistema de gestión de seguridad de la información. Es especialmente relevante en el contexto de la nube, donde la seguridad de los datos es una preocupación importante.
                                </li>
                                <li>
                        <strong class="normas">ISO/IEC 27017></strong>: Se trata de un estándar específico para la seguridad de la información en servicios en la nube. Proporciona orientación adicional y controles de seguridad específicos para los proveedores de servicios en la nube y los clientes que utilizan servicios en la nube.
                                </li>
                                <li>
                        <strong class="normas">ITIL (Information Technology Infrastructure Library)</strong>: Es un conjunto de mejores prácticas para la gestión de servicios de tecnología de la información. ITIL establece una serie de procesos y procedimientos para garantizar una gestión eficiente y efectiva de los servicios de TI, incluidos los servicios en la nube.
                                </li>
                                <li> 
                        <strong class="normas">NIST (National Institute of Standards and Technology)</strong>: El NIST ha desarrollado un marco de ciberseguridad ampliamente utilizado que proporciona directrices, estándares y mejores prácticas para ayudar a las organizaciones a gestionar y mitigar los riesgos de seguridad de la información. Este marco es particularmente relevante para la nube debido a su enfoque en la gestión de riesgos.
                                 </li>
                            </ol> 
                        </div>
                    </td>
                    <td class="tableColor">
                        <div class="desc4">
                        <h2 class="tableTitle">Estándares de servicio</h2>
                        <img src="estandar.png" alt="" class="patronImg2">
                        <p class="desc3">"Conjunto de normas, prácticas y directrices establecidas para garantizar la calidad, confiabilidad y interoperabilidad de los servicios en un entorno específico"</p>
                       
                    
                    
                        </div>
            
                    </td>
                </tr>

            </table>

        </div>
    </section>

    <footer>
    <p class="dev">Website by Armas Barragan Luis Fernando © 2023</p>
    </footer>













    <a href="#" id="scroll-top-btn"><i src="cat.png"></i></a>
    <div id="popup" class="popup">
    <div class="popup-content">
        <span id="closeButton">&times;</span>
        <h2>Referencias bibliográficas</h2>
        <h3>---------------------------</h3>
        <ol>
            <li><a href="https://www.oracle.com/mx/cloud/what-is-cloud-computing/" target="_blank">¿Que significa cloud computing? </a></li>
            <li><a href="https://learndigital.withgoogle.com/activate/course/cloud-computing/module/1219/lesson/1220">Tipo de nubes</a></li>
            <li><a href="https://aws.amazon.com/es/types-of-cloud-computing/">Tipos de computo en la nube</a></li>
            <li><a href="https://openwebinars.net/blog/tipos-de-cloud-computing/" target="_blank">Tipos de servicios</a></li>
            <li><a href="https://cloud.google.com/learn/what-is-iaas?hl=es#:~:text=La%20infraestructura%20como%20servicio%20(IaaS,a%20través%20de%20la%20nube" target="_blank">ServicioEnLaNube:IaaS</a></li>
            <li><a href="https://cloud.google.com/learn/what-is-paas?hl=es#:~:text=Plataforma%20como%20servicio%20(PaaS)%20es,%2C%20middleware%2C%20herramientas%20y%20más" target="_blank">ServicioEnLaNube:PaaS</a></li>
            <li><a href="https://aws.amazon.com/es/what-is/saas/#:~:text=para%20crear%20SaaS%3F-,¿Qué%20es%20SaaS%3F,acceder%20a%20ellos%20bajo%20demanda" target="_blank">ServicioEnLaNube:SaaS</a></li>
            <li><a href="https://refactoring.guru/es/design-patterns" target="_blank">Patrones de diseño</a></li>
            <li><a href="https://www.analyticssteps.com/blogs/what-open-cloud-computing-interface-occi" target="_blank">Estándares de servicio</a></li>    
        </ol>
    </div>
    </div>

<script>
        window.addEventListener('scroll', function() {
        var scrollBtn = document.getElementById('scroll-top-btn');
        if (window.pageYOffset > 300) {
            scrollBtn.style.display = 'block';
        } else {
            scrollBtn.style.display = 'none';
        }
        });

        document.getElementById('scroll-top-btn').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        var openButton = document.getElementById("openPopup");
        var popup = document.getElementById("popup");
        var closeButton = document.getElementById("closeButton");

        openButton.addEventListener("click", function() {
        popup.style.display = "block";
        });

        closeButton.addEventListener("click", function() {
        popup.style.display = "none";
        });
        






        
</script>
<!--Social media icons by freepik, riajulislam and edt.im-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>