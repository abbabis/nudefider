<?php

if (!empty($_POST['phone'])) {
    send_the_order ($_POST);
}

function send_the_order ($post){
    $params=array(
      "flow" => 5929,
      "offer" => 518,
        'ip' => $_SERVER['REMOTE_ADDR'],
        "name" => $post["name"],
        "phone" => $post["phone"],
        "fb" => $post["fb"],
        "country" => "AR",
        "ua" => $_SERVER["HTTP_USER_AGENT"],
        "us" => isset( $post["utm_source"] ) ? $post["utm_source"] : "",
        "uc" => isset( $post["utm_campaign"] ) ? $post["utm_campaign"] : "",
        "un" => isset( $post["utm_content"] ) ? $post["utm_content"] : "",
        "ut" => isset( $post["utm_term"] ) ? $post["utm_term"] : "",
        "um" => isset( $post["utm_medium"] ) ? $post["utm_medium"] : "",
    );
  $url = "https://just-traffic.org/api/wm/push.json?id=57-5ac4836f4ca2ff97232cb1d513a6dd45" ;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $return= curl_exec($ch);
    curl_close($ch);
    header('Location: success.php');
}
?>
<!DOCTYPE html>
<html  lang="ES">

<head>



  <meta charset="utf-8" />
  <title>&quot;Los métodos de tratamiento de las articulaciones que se implican en Colombia no parecen nada
    convenientes&quot;. El famoso reumatólogo alemán dio una entrevista franca a la edición colombiana</title>
  <meta content="&quot;Los métodos de tratamiento de las articulaciones que se implican en Colombia no parecen nada convenientes&quot;. El famoso reumatólogo alemán dio una entrevista franca a la edición colombiana" name="description" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="//assets.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link href="//assets.website-files.com/img/webclip.png" rel="apple-touch-icon" />


  <style>
    .hide,
    .flag-dropdown {
      display: none;
    }

    .error-box {
      color: #fff;
      background-color: #DE5042;
      border-radius: 5px;
      text-align: center;
      width: 100%;
      font-size: 13px;
      line-height: 20px;
      z-index: 100;
      margin: 0 auto 10px
    }

    .custom-imput {
      width: 80% !important;
    }
    .intl-tel-input {
      width: 80% !important;
    }

    .intl-tel-input input {
      width: 100% !important;
    }

    .container-3 {
      border-radius: 20px !important;
    }
    @media screen and (max-width: 767px){
      .container-3 {
        margin: 30px;
      }
    }
  </style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>

</head>

<body class="body">
  <div class="w-container">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-2 w-nav">
      <div class="container-13 w-container">
        <div class="w-nav-button"></div>
        <div class="container-14 w-container">
          <nav role="navigation" class="nav-menu-3 w-nav-menu"><a href="#target" class="nav-link-10 w-nav-link"><strong>SECCIÓN</strong><br /></a><a href="#target" class="nav-link-9 w-nav-link"><strong>MANUAL<br /></strong></a><a href="#target"
              class="nav-link-9 w-nav-link"><strong>CONSULTAS</strong></a><a href="#target" class="nav-link-11 w-nav-link"><strong class="bold-text-60">OFICINA DE
                PRENSA</strong></a><a href="#target" class="nav-link-11 w-nav-link"><strong class="bold-text-60">CONTACTOS</strong></a>
          </nav>
          <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
    <h1 class="heading"><strong class="bold-text-56">&quot;Los métodos de tratamiento de las articulaciones que se
        implican en Argentina no parecen nada convenientes&quot;. El famoso reumatólogo alemán dio una entrevista franca a la
        edición argentino.</strong><br /></h1>
    <div class="text-block text-block-script">
      <script>
        function addZero(i) {
          if (i < 10) {
            i = "0" + i
          }
          return i
        }

        var days = 2;
        var date = new Date();
        var last = new Date(date.getTime() - (days * 24 * 60 * 60 * 1000));
        var day = addZero(last.getDate());
        var month = addZero(last.getMonth() + 1);
        var year = last.getFullYear();
        var sNow = day + "." + month + "." + year;
        document.write(sNow);
      </script>
    </div>
    <div class="text-block-2"><strong class="bold-text-57"><em class="italic-text">El Dr. Alfred Müller es el jefe del
          mundialmente famoso Centro de Reumatología y Neurología de Berlín.<br /></em><br /></strong></div>
    <div class="text-block-2 _12"><strong class="bold-text-58"><em class="italic-text-2">Hay sólo una causa de
          enfermedades de las articulaciones, pero está completamente ignorada por los médicos argentino</em><br /></strong>
    </div>
    <img width="513" srcset="img/doctor.png" sizes="(max-width: 767px) 100vw, 513px" alt="" class="image-3" />
    <div class="text-block-26"><strong><em>Dr. Alfred Müller:</em></strong><em> &quot;En Argentina las enfermedades de las
        articulaciones todavía se tratan con medicamentos anticuados y poco eficaces que requieren un uso constante
        durante toda la vida. Mientras que en Alemania las articulaciones se tratan tan fácilmente como un catarro.&quot;<br /></em><br />
    </div>
    <div class="div-block">
      <div class="text-block-4">El año pasado Alfred Müller viajó a Argentina para examinar la experiencia de sus colegas
        argentino. Lo que vio en Argentina, según él, no se puede explicar. En nuestro país, según Alfred, la reumatología
        se paró en su desarrollo a nivel de mediados del siglo pasado.<br /><br />Después de dar unas entrevistas en
        Alemania, el Dr. Alfred Müller dio su consentimiento para una entrevista a nuestra edición argentino. ¿Qué
        cosas no le gustaron al famoso médico en la medicina argentino? ¿Y por qué afirma que los argentino que sufren
        de articulaciones enfermas nunca podrán curarse?<br /><br /><strong>- Hablando ante los periodistas alemanes,
          Usted dijo que lo que había visto en Argentina le había dejado en shock. ¿Podría
          comentarlo?<br /></strong><br />- Ante todo quiero decir que me gusta mucho Argentina, su cultura y sus
        ciudadanos. Pero el estado de la medicina acá realmente deja en shock a los médicos alemanes. Su medicina
        retrasa como mínimo 20, o tal vez 30 años. Por lo menos, en lo que toca al tratamiento de enfermedades
        articulares y del aparato locomotor. Se puede decir que la reumatología no existe como una ciencia en
        Argentina.<br /><br />Mire lo que los médicos sugieren para tratar las articulaciones en Argentina: Viprosal,
        Ibuprofeno, Voltaren\Fastum Gel, Diclofenac, Theraflex, Nurofen y otros medicamentos similares.<br /><br />Sin
        embargo, estos medicamentos NO TRATAN LAS ARTICULACIONES Y LOS CARTÍLAGOS, solo alivian los síntomas de la
        enfermedad: dolor, inflamación, hinchazón. Ahora imagine lo que está sucediendo en el cuerpo. Cuando uno
        toma una pastilla, aplica un gel anestésico o hace una inyección, el dolor se pasa. Pero una vez que el
        remedio deja de funcionar, el dolor vuelve inmediatamente<br /><br />Y el dolor es una señal importante,
        señala que una articulación tiene un proceso patológico. Simplemente aliviando el dolor, las articulaciones
        afectadas sufren un mayor impacto. El proceso de destrucción se acelera de 3 a 5 veces y al final conduce a
        unos cambios irreversibles, inmovilización completa y discapacidad.<br /><br />Esta forma de eliminar el dolor
        en las articulaciones no se utiliza en Europa ya durante más de 20 años. Los remedios contra el dolor se
        usan solo en casos extremos, muy raramente y con mucho cuidado. En Alemania, se venden solo con recetas y
        bajo estricto control médico.<br /><br />Los llamados &#x27;hondroprotectores&#x27; están prohibidos por
        completo como medicamentos absolutamente fraudulentos e inútiles<br /><br />¡Sus médicos y farmacéuticos
        simplemente mutilarán a la gente! Está claro que es mucho más beneficioso vender constantemente a altos
        precios unos remedios para eliminar los síntomas que curar la enfermedad para siempre, recuperar la
        articulación afectada, ¡pero es horrible!<br /><br /><strong>- ¿Y cómo en Alemania van las cosas con el
          tratamiento de las articulaciones?<br /></strong><br />- Todos los médicos alemanes, desde los
        catedráticos-reumatólogos hasta los médicos de cabecera ordinarios y los paramédicos, entendieron hace mucho
        que no es necesario eliminar los efectos de la enfermedad, sino sus causas. Es la garantía de una curación
        completa, rápida y segura. ¿Cuál es la causa principal de lesiones en las articulaciones? Es la deposición
        de cristales en las articulaciones debido a un trastorno de la circulación sanguínea y del líquido sinovial.<br /><br />Los
        uratos son sales de ácido úrico que causan la gota.<br /><br />Los osteofitos, las sales calcinadas, son la
        causa del 97% restante de las enfermedades articulares y de la columna vertebral. Que son todo tipo de
        artritis y artrosis, osteocondrosis, osteoporosis, reumatismo, bursitis e incluso higroma. Todas estas
        enfermedades tienen una causa: deposición de osteofitos.<br /><br />Las sales, deponiéndose en las superficies
        de la articulación, actúan como si el papel de lija afilara los tejidos circundantes - los huesos y el
        cartílago. Creciendo, los cristales de sales comienzan a traumatizar el tejido muscular, los tendones, los
        vasos sanguíneos y los capilares. Causando la inflamación, infección, hinchazón y dolor severo.<br /><br />En
        casos descuidados, los grandes cúmulos de estas sales pueden romper fácilmente una parte del hueso con un
        movimiento brusco, causando así una incapacidad total y inmovilizando para siempre la
        articulación.<br /><br />Una idea errónea y muy peligrosa es que el calcio es útil para las articulaciones.
        Sí, el calcio es útil, pero solo para las articulaciones SANAS. Cuando las articulaciones ya duelen o
        castañetean, significa que ya se ha formado una capa de osteofitos, y el calcio, además de fortalecer el
        tejido óseo, también fortalece estas sales-osteofitos, agravando y acelerando su crecimiento.<br /><br />Por
        eso los reumatólogos alemanes recuperan ante todo la circulación sanguínea en la articulación afectada, de
        modo que se eliminen las sales acumuladas durante años. Esto, a su vez, recupera la circulación normal del
        líquido sinovial y comienza el proceso de reparación de los tejidos de la articulación<br /><br /></div>
      <div class="text-block-4">De hecho, las articulaciones humanas son muy regenerativas, son capaces de recuperarse
        por sí mismas, como una cola de lagarto. Sólo necesitan un poco de ayuda en esto - para liberarse de sales
        &quot;pegadas&quot; en ellas - y el proceso se pondrá en marcha.<br /><br /><br /><br />Cuando vi las
        estadísticas médicas de Argentina, me asusté. ¿Sabe cuál es la causa más frecuente de discapacidad en Argentina? ¡No
        es cáncer ni SIDA ni diabetes, es artrosis! ¡La artrosis más simple que en Alemania se trata en 2 o 3
        semanas con el medicamento bastante económico, en Argentina conduce a la discapacidad!<br /><br />En Alemania hoy
        en día, las enfermedades articulares no se consideran patologías peligrosas, a menos que, por supuesto, se
        trate de daños traumáticos graves: fracturas, fisuras etc. El dolor y la inflamación en las articulaciones
        solo indican que estas &quot;están contaminadas&quot; con sales y es hora de limpiarlas. Después de un curso
        mensual de &#x27;limpieza&#x27;, las articulaciones se vuelven en norma y se puede olvidar de estos
        problemas para toda la próxima década.<br /><br />Las enfermedades articulares que en Argentina están tratando de
        &#x27;tratar&#x27; por separado, en Europa ya están unidas desde hace mucho en una sola enfermedad &#x27;Articulatio
        de sales&#x27; (deposiciones de sales en las articulaciones). Esta enfermedad incluye:<br /></div>
      <ul class="list">
        <li class="list-item-2">Artritis.<br /></li>
        <li class="list-item">Gota.<br /></li>
        <li>Sinovitis.<br /></li>
        <li>Reumatismo.<br /></li>
        <li>Osteocondrosis.<br /></li>
        <li>Osteoporosis.<br /></li>
        <li>Artrosis.<br /></li>
        <li>Bursitis.<br /></li>
        <li>Higroma.<br /></li>
      </ul>
    </div>
    <div class="text-block-4"><br />Esta es una lista muy breve, pero el resto de las enfermedades son solo una
      subespecie de estas nueve patologías principales. Por ejemplo, la coxartrosis es una subespecie de la artrosis,
      etc.<br /><br />Y toda esta larga lista de enfermedades se cura con una limpieza muy simple y banal de las
      articulaciones. Es absolutamente segura, ni siquiera requiere atención médica y se lleva a cabo en
      casa<br /><br /><strong>- ¿Cómo &quot;limpian&quot; las articulaciones en Alemania?<br /></strong><br />- Hoy en día
      existen medicamentos especiales que están diseñados para limpiar las articulaciones de las deposiciones de sal.
      <br /><br />También una ventaja importante de Enerflex es que contiene un complejo de vitaminas de artro-, macro-
      y microelementos diseñadas para mejorar el funcionamiento de los tejidos de la articulación. Es decir, tiene un
      efecto curativo integral para el tejido óseo y cartilaginoso, líquido sinovial, fibras musculares, tejidos de
      los ligamentos y tendones. O sea, tiene un efecto complejo e integral, es una pomada increíble.<br /><br />Enerflex
      incluye más de 50 componentes. No voy a enumerarlos todos, solo los principales:<br /></div>
    <div class="w-layout-grid grid">
      <div id="w-node-7f1eceba4bff-ea12ce9a" class="text-block-13">Aceite de MENTOL Y ÁRNICA El
GROSELLO NEGRO Y CALÉNDULA<br /></div>
      <div class="text-block-7">Un producto útil, biológicamente activo con una composición única. La composición de
        la grasa incluye muchos compuestos útiles, vitaminas, oligoelementos:<br /></div>
      <div id="w-node-1917420cfa2d-ea12ce9a" class="text-block-14">Escualeno<br /></div>
      <div class="text-block-6">Esta es la principal sustancia activa, cuyo efecto se asemeja a la acción de
        antioxidantes fuertes. Se caracteriza por características antiinflamatorias pronunciadas, anestesia,
        restaura tejidos problemáticos y también tiene un efecto antitumoral<br /></div>
      <div id="w-node-2e474ea692e2-ea12ce9a" class="text-block-15">Vitamina A<br /></div>
      <div class="text-block-8">Normaliza la penetrabilidad de los capilares pequeños<br /></div>
      <div id="w-node-f545c561b12e-ea12ce9a" class="text-block-16">Alcoxilglicéridos<br /></div>
      <div class="text-block-9">Estos compuestos tienen un efecto positivo sobre las defensas del cuerpo, la
        microcirculación, que contribuye a la regeneración del tejido del cartílago con artrosis<br /></div>
      <div id="w-node-bf917b0bf81a-ea12ce9a" class="text-block-17">Ácidos grasos poliinsaturados<br /></div>
      <div class="text-block-20">Compuestos importantes para el cuerpo humano que afectan favorablemente los procesos
        metabólicos y los vasos sanguíneos<br /></div>
      <div id="w-node-b9f6416a8354-ea12ce9a" class="text-block-18">Vitamina B3<br /></div>
      <div class="text-block-11">Dilata los vasos sanguíneos, mejora el flujo sanguíneo en el área de la
        articulación<br /></div>
      <div id="w-node-33c928e11782-ea12ce9a" class="text-block-19">Un complejo de vitaminas y minerales<br /></div>
      <div class="text-block-12">Mantiene la salud del sistema motor, previene el desarrollo de enfermedades y
        suspende procesos patológicos<br /></div>
    </div>
    <div class="text-block-4"><br /><strong>- Por lo que sabemos, </strong><a href="#target"><strong>Enerflex</strong></a><strong> no se vende en las farmacias
        argentino.<br /></strong><br />- Exactamente, que no. Los médicos argentino prefieren prescribir a la población los
      anestésicos y hondroprotectores en una cantidad enorme en lugar de practicar el tratamiento real.<br /><br />Sin
      lugar a dudas, los reumatólogos argentino, al menos aquellos que están interesados en los tratamientos
      progresivos, conocen Enerflex y sus capacidades para recuperación. Pero no se arriesgan a recetar un medicamento
      que no está en la lista del Ministerio de Salud.<br /><br />Por lo que yo sepa, el fabricante del <a href="#target"><strong>Enerflex</strong></a> quería entrar en el mercado argentino. Pero no le permitieron
      hacerlo inventando cientos de obstáculos (la burocracia en Argentina no tiene límites). Se puede comprenderlo: si
      este remedio aparece en las farmacias, las farmacias argentino sufrirán enormes pérdidas. ¡Es que la farmacología
      hoy es un negocio! Incluso en Alemania. Pero en Alemania el negocio está controlado por el estado, y no voy a
      juzgar lo que está sucediendo en Argentina, Ustedes lo sabrán mejor.<br /><br /><strong>- ¿Qué aconsejaría a los
        argentino con articulaciones afectadas?<br /></strong><br />- La gente corriente, especialmente la que tiene
      más de 50, sufre del retraso de la medicina más que otros. No es su culpa, es sólo el sistema de
      sanidad<br /><br />Pero afortunadamente, hay una salida. Nos pusimos de acuerdo con el Centro argentino de
      Reumatología sobre la posibilidad de distribuir este remedio a todos los ciudadanos de Argentina que tengan problemas
      con las articulaciones. ¡Se creó un sitio web oficial especial con el que cualquier residente de Argentina puede
      pedir Enerflex casi gratis.<br /></div>
    <div class="text-block-4"><br />Llevamos tres meses distribuyendo Enerflex. Esta oportunidad ya la aprovecharon
      varios miles de argentino. Les pedimos a todos los que recibieron Enerflex que evalúen la eficacia del
      medicamento en una escala de 0 a 10. Por el momento, más de 3 600 personas participaron en la encuesta y la
      evaluación promedia del medicamento es 9.96 de 10<br /><a href="#target">‍</a><br />Como puede ver, ¡Enerflex
      ayudó a devolver la movilidad y deshacerse del dolor a miles de argentino y casi gratis! Usted también puede
      estar entre ellos.<br /><br /><strong id="tut">- ¿Cuánto tiempo durará la distribución preferencial de esta pomada
        fantástica?<br /></strong><br />- Hasta que termine el lote dedicado. Pero quiero advertirles que ya quedan
      pocas unidades. Hay más pedidos con cada día. Funciona el método de "boca a boca", la gente transmite la
      información entre sí, aconseja a los amigos, pide la pomada para los familiares. No esperábamos que la
      información sobre Enerflex se distribuyera tan rápido por toda la Argentina.<br /><br />Recomiendo a todas las personas
      que tienen problemas con las articulaciones que envíen una solicitud al sitio para recibir Enerflex por oferta
      hasta que termine. Y recuerden siempre que nuestra salud es lo más importante y valioso que tenemos.<br /><br />


        <center><img src="img/prod_box.png"></center>
    </div>
  </div>
  <div id="ordertop" class="container-3 w-container">
    <div class="form-block w-form">
      <div class="columns-8 columns-9 w-row">
        <div class="w-col w-col-4">
          <h2 data-w-id="4c58eacc-49bf-2fde-335a-2608aa57b3e9" class="heading-22 oldPriceAndLabelForLandingInfoApi">$7.200
            <strong>Pesos</strong><br /></h2>
        </div>
        <div class="column-2 w-col w-col-4"><img src="img/5e4fd93c61de30efce12cebc_50%25.gif" width="624" data-w-id="4c58eacc-49bf-2fde-335a-2608aa57b3ee"
            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);transform-style:preserve-3d"
            alt="" /></div>
        <div class="w-col w-col-4">
          <h2 class="heading-21"><strong data-w-id="4c58eacc-49bf-2fde-335a-2608aa57b3f1" class="priceAndLabelForLandingInfoApi">$3.600
          Pesos</strong></h2>
        </div>
      </div>
      <form id="wf-form-Order" name="wf-form-Order" data-name="Order" action="" method="post" class="form form-request">
      <input type="hidden" name="utm_source" value="<?=$_GET['utm_source'];?>" />
<input type="hidden" name="utm_content" value="<?=$_GET['utm_content'];?>" />
<input type="hidden" name="utm_campaign" value="<?=$_GET['utm_campaign'];?>" />
<input type="hidden" name="utm_term" value="<?=$_GET['utm_term'];?>" />
<input type="hidden" name="utm_medium" value="<?=$_GET['utm_medium'];?>" />
<input type="hidden" name="fb" value="<?=$_GET['fb'];?>" />
        <label for="name-2" class="field-label"><strong>INTRODUZCA SU
            NOMBRE:</strong><br />
        </label>
        <input type="text" placeholder="Nombre" class="input__name text-field-4 w-input custom-imput name-field" p maxlength="256" name="name" data-name="name" required="" id="name-2" class="text-field-4 w-input" />
        <label for="phone-2"><strong>INTRODUZCA SU
            DE TELÉFONO:</strong><br />
          </label>
          <input type="text"   minlength="16" placeholder="+54 123 456 789" maxlength="256" name="phone" data-name="phone" required="" id="phone-2" class="text-field-4 w-input custom-imput phone-field" />
            <input type="submit" value="COMPRAR CON DESCUENTO"  class="submit-button w-button" />
        <div class="w-embed"></div>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  <div>
    <div class="w-container">
      <h3 class="heading-24"><strong class="bold-text-61">Comentarios</strong><br /></h3>
    </div>
  </div>
  <div data-w-id="65432efc-5d91-9ea6-ea43-21950c93aece" style="opacity:1" class="section">
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de30873612cea7_2.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Victor Ferrero</strong><br /></h4>
        <p class="paragraph-7">Soy uno de los que ya probaron Enerflex. Es realmente el mejor. Tengo artrosis ya
          desde hace 7 años. Ya estaba listo para tomar pastillas y hacerme inyecciones toda la vida, pero, al
          final, después del curso de Enerflex el dolor se fue. Completamente. ¡Se la recomiendo a todos, les
          ayudará!<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de30203c12ceb8_4.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Elena Dallas</strong><br /></h4>
        <p class="paragraph-7">Dejé la solicitud. Me prometieron que en cinco días podré recibir el paquete. Eso
          espero.<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de3063d612ceb6_3.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Miguel Gómez</strong><br /></h4>
        <p class="paragraph-7">Tengo 61 años. Me duelen las rodillas desde que tuve 51 años. Recientemente el dolor
          se hizo insoportable. Un médico conocido mío (el amigo de la infancia) me habló de este programa y me
          aconsejó que pidiera el medicamento hace 3 meses. Ahora ya corro... ¡Puedo correr y saltar! ¡Este
          remedio es genial !<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de30d09312ceb2_1.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Jimena Lucía Cardenas</strong><br /></h4>
        <p class="paragraph-7">Gracias. ¡Muy útil! Me pedí Enerflex. El consultor dijo que todavía los hay, pero
          está terminando rápidamente. Buena noticia, qué suerte tuve..<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de30001612ceb1_5.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Ana María Cervatillo</strong><br /></h4>
        <p class="paragraph-7">Creo que el objetivo principal de los médicos es cobrarnos lo máximo posible, no les
          interesa nada más. Cada 6 meses me hacen inyecciones. Este año en otoño me prescribieron tales medicinas
          que tenía miedo de hacerme las inyecciones con esas. Y ni siquiera me examinaron si tenía otras
          enfermedades y cómo afectaría al cuerpo. Es la más completa indiferencia y es que prescriben los
          medicamentos por los que cobran de las empresas farmacéuticas. Puede que no sea así en otros lugares,
          pero no estoy segura. Esa es nuestra medicina. Pero ¡qué buena noticia lo del remedio preferencial de
          Alemania!<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de3007c612cec9_7.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Camilo </strong><br /></h4>
        <p class="paragraph-7">Este medicamento es realmente bueno. Lo tomé el verano pasado (mi hijo lo trajo de
          Berlín). ¡La gota se me fue! Todavía no tengo ningunas síntomas. Me sorprende mucho. Me siento bien.
          ¡Les recomiendo este medicamento a todos!<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de3074e112cea6_8.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Alicia Moreno</strong><br /></h4>
        <p class="paragraph-7">También tengo una experiencia de usar Enerflex y también es positiva. Siempre me
          hacía inyecciones, y ¡después de usar Enerflex estoy volando literalmente ya el segundo mes!<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de304a6c12cebb_9.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Lucía Carmen</strong><br /></h4>
        <p class="paragraph-7">Y a mí me gustó este medicamento. Primero tomaba Etodolac, luego Meloxicam junto con
          Ketorol. Pero de repente dejaron de actuar. Luego fui al médico, y me aconsejó que probara un nuevo
          medicamento Enerflex (el médico era joven, ¡probablemente todavía cree que la medicina debe ser para las
          personas y no para cobrar dinero!). Enerflex me ayudó desde la primera aplicación: el dolor se pasó casi
          inmediatamente, pero yo comencé a tomar todo el curso, según lo aconsejó el médico. Después de 3
          semanas, olvidé que me dolía en absoluto. ¡Me siento genial, como cuando era joven!<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de306a1712cea4_11.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Teresa Campiña</strong><br /></h4>
        <p class="paragraph-7">Mientras leía en los foros las opiniones sobre Enerflex, ¡ví que está acabando muy
          rápido! Gracias a Dios pude llenar el formulario. Y también voy a recibirlo por oferta, esto es muy
          agradable.<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de30d91812cebd_10.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Andrés Wagner</strong><br /></h4>
        <p class="paragraph-7">Mi vecino que tiene 72 años antes a menudo se quejaba de dolores en espalda baja.
          Pero en el último mes lo veo activo y alegre. Me contó que había usado Enerflex, su nieto se lo trajo de
          alguna parte.<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de3064bb12cea5_13.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Pablo Terreno</strong><br /></h4>
        <p class="paragraph-7">Me enteré de Enerflex en uno de los foros para los que sufren enfermedades
          articulares. Muchos elogian allí sus resultados. Decidí pedírmelo también. Lo aplico solamente desde
          hace 3 días, y ya las mejoras se notan en todo. El dolor pasó por completo, el crujido se volvió mucho
          más silencioso, una pequeño hinchazón todavía persiste, pero es mucho mejor de lo que era. Pues, voy a
          escribir sobre los resultados del curso, pero el comienzo me gusta.<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de30691412cea3_14.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Marina González</strong><br /></h4>
        <p class="paragraph-7">Gracias. Me la pedí para mí y para mi marido. Le pregunté al consultor cuándo se
          vendería en la farmacia, dijo que no se sabía. Por eso puede ser es la única oportunidad de probar este
          medicamento.<br /></p>
      </div>
    </div>
    <div class="container-7 w-container">
      <div class="div-block-3"><img src="img/5e4fd93c61de309c4712ceae_15.jpg" width="100" alt="" class="image-14" />
      </div>
      <div class="div-block-4">
        <h4 class="heading-12"><strong>Luz Alejandra</strong><br /></h4>
        <p class="paragraph-7">¡Gracias!<br /></p>
      </div>
    </div>
  </div>
  <div id="ordertop" class="container-3 w-container">
    <div class="form-block w-form">
      <div class="columns-8 columns-9 w-row">
        <div class="w-col w-col-4">
          <h2 data-w-id="4b68fd1b-e5e8-10e5-b15d-ca00ccb5b007" class="heading-22 oldPriceAndLabelForLandingInfoApi ">$7.200
            <strong>Pesos</strong></h2>
        </div>
        <div class="column-2 w-col w-col-4"><img src="img/5e4fd93c61de30efce12cebc_50%25.gif" width="558" data-w-id="4b68fd1b-e5e8-10e5-b15d-ca00ccb5b00c"
            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(-720DEG) rotateZ(0) skew(0, 0);transform-style:preserve-3d"
            alt="" /></div>
        <div class="w-col w-col-4">
          <h2 class="heading-21"><strong data-w-id="4b68fd1b-e5e8-10e5-b15d-ca00ccb5b00f" class="priceAndLabelForLandingInfoApi">$3.600
          Pesos</strong></h2>
        </div>
      </div>
      <form id="target" name="wf-form-Order" data-name="Order" action="" method="post" class="form form-request1">
      <input type="hidden" name="utm_source" value="<?=$_GET['utm_source'];?>" />
<input type="hidden" name="utm_content" value="<?=$_GET['utm_content'];?>" />
<input type="hidden" name="utm_campaign" value="<?=$_GET['utm_campaign'];?>" />
<input type="hidden" name="utm_term" value="<?=$_GET['utm_term'];?>" />
<input type="hidden" name="utm_medium" value="<?=$_GET['utm_medium'];?>" />
<input type="hidden" name="fb" value="<?=$_GET['fb'];?>" />
        <label for="name-4" class="field-label"><strong>INTRODUZCA SU
            NOMBRE:</strong></label><input type="text" class="input__name text-field-4 w-input custom-imput name-field"  maxlength="256" name="name" data-name="name" required="" id="name-4" class="text-field-4 w-input" /><label for="phone-4"><strong>INTRODUZCA SU DE
            TELÉFONO:</strong><br /></label>
            <input type="text"   minlength="16" maxlength="256" name="phone" data-name="phone" required="" id="phone-4" class="text-field-4 w-input custom-imput phone-field" />
            <input type="submit" value="COMPRAR CON DESCUENTO" data-wait="Please wait..."
          data-w-id="330dd8c5-a84c-bee6-5aea-e9af4756d1a7" class="submit-button w-button" />
        <div class="w-embed"></div>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  <div class="text-block-25"><a href="privacy.html">Privacy Policy</a></div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(68788084, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/68788084" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


  <script type="text/javascript">
      $('.phone-field').inputmask("+54-999-999-9999");


jQuery.validator.addMethod("checkMaskPhone", function(value, element) {
    return /\+\d{2}\-\d{3}\-\d{3}-\d{4}/g.test(value);
});

// $(".name-field").inputmask({ regex: "[a-zA-Z- ]*" });
$(".name-field").inputmask({ regex: "^[^0-9!@#$%^&*()_]{1,256}$" });
var form = $('.form-request');

form.validate();
var form1 = $('.form-request1');

form1.validate();

$.validator.addClassRules({
    'phone-field': {
        checkMaskPhone: true,
    }
});

// form.submit(function(e){
//     e.preventDefault();
//     if (form.valid()) {
//         alert('Форма отправлена');
//     }
//     return;
// });


</script>



</body>

</html>
