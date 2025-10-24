<?php
$idiomasSoportadosPorIso639 = [
        'es' => 'Español',
        'en' => 'English',
        'pt' => 'Português',
];
$idiomaIso639 = ($_GET['hl'] ?? '');
if (empty($idiomasSoportadosPorIso639[$idiomaIso639])) {
        $idiomaIso639 = '';
}
if (empty($idiomaIso639)) {
        $idiomaIso639 = substr(($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? ''), 0, 2);
}
if ($idiomaIso639 === 'es') {
        $idiomaIso639 = '';
}
if (!empty($idiomasSoportadosPorIso639[$idiomaIso639])) {
        require_once ('traducciones/' . $idiomaIso639 . '.php');
}
function t($texto) {
        global $traduccionesPorTexto;
        $textoTraducido = ($traduccionesPorTexto[$texto] ?? '');
        if ($textoTraducido) {
                return $textoTraducido;
        }
        return $texto;
}
?>
<title><?= t('Piyin Contacto Canales') ?></title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
        * {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        .ancla {
                font-size: 12px;
        }
        span {
                cursor: pointer;
                font-weight: bold;
        }
        span.inactivo {
                cursor: default;
                font-weight: normal;
        }
</style>
#
<?php foreach ($idiomasSoportadosPorIso639 as $iso639 => $idioma) { ?>
        <a href="?hl=<?= $iso639 ?>">
                <?= $idioma ?>
        </a>
        #
<?php } ?>
<h1 id="Deja_ya_de_joder">
        <?= t('Yo no me llamo Jajajavier, soy Piyin...') ?>
</h1>
<p><?= t('...y aquí puedes ver algunas maneras para contactarme') ?></p>
<h2 id="Antes_de_iniciar">
        1. <?= t('Prólogo') ?>
</h2>
<p>
        <?= t('Mi vieja mula ya no es lo que era') ?> =(
</p>
<h2 id="Para_leer_con_calma">
        2. <?= t('Introducción') ?>
</h2>
<p>
        <?= t('Piyin no es más que niyiP al revés. También puede ser perro, si le cambias casi todas las letras. La vida es corta, así que mejor voy al grano:') ?>
</p>
<h3 id="DescripciÓn_pendeja">
        2.1. <?= t('Yo soy así, tarán!') ?>
</h3>
<ol type="a">
        <li>
                <?= t('Soy un pendejo de tiempo completo, creyente de Hakuna Matata: sin preocuparse es cómo hay que vivir') ?>
        </li>
        <li>
                <?= t('Me gustan mucho los computadores: se siente bien tener un amigo bobo pero muy rápido al seguir instrucciones') ?>
        </li>
        <li>
                <?= t('La vida es una secuencia de chistes: no tengo un límite para los mismos y creo que nadie debería tenerlo') ?>
        </li>
        <li>
                <?= t('Creo que la libertad de expresión debería existir en la práctica y no únicamente en el papel') ?>
        </li>
        <li>
                <?= t('Me gusta mucho discutir sobre lo que sea (literalmente, dudo que alguien me pueda ofender) y así seguir aprendiendo cosas nuevas') ?>
                =D
        </li>
</ol>
<h3 id="Agunas_vainas_que_hago">
        2.2. <?= t('Y hago así, torón!') ?>
</h3>
<ol type="a">
        <li>
                <?= t('Siempre respondo, nunca dejo en visto: nunca voy a ver tu mensaje a menos que tenga tiempo para responderlo, ni siquiera lo leeré en la notificación (considero que eso no me sirve para algo). Una vez lo lea, obtendrás respuesta en el tiempo que me demore en responderlo, a menos que muera') ?>
                 =O
        </li>
        <li>
                <?= t('Intentaré responder con honestidad, aunque es bien sabido que todos los humanos mienten (incluso algunos animales)') ?>
        </li>
        <li>
                <?= t('Nunca te voy a escribir de manera intensa. Si te aburres de mí y quieres que te deje de responder, sencillamente puedes dejar de escribirme') ?>
        </li>
</ol>
<h2 id="Epílogo">
        3. <?= t('Epílogo') ?>
</h2>
<p>
        <?= t('Si llegaste aquí es porque tal vez quieras contactarme. Si fuera tú, lo pensaría bien, es posible que te arrepientas') ?>
         xD
</p>
<h2 id="Piénsalo_bien">
        4. <?= t('Antes de contactarme') ?>
</h2>
<ol type="a">
        <li>
                <?= t('Sería un detalle muy elegante si tu primer mensaje incluye:') ?>
                <ol type="i">
                        <li>
                                <?= t('La palabra dinosaurio, al revés y sin vocales') ?>
                        </li>
                        <li>
                                <?= t('El código al lado de piyin.cc# en la plataforma donde me encontraste') ?>
                        </li>
                        <li>
                                <?= t('La cantidad de letras "b" que aparecen en esta página') ?>
                        </li>
                </ol>
        </li>
        <li>
                <?= t('No soy adicto a las notificaciones (todas las tengo silenciadas tanto en el computador cómo en el celular), lo que significa que puede que no te responda al instante a menos que realmente tenga tiempo') ?>
        </li>
        <li>
                <?= t('Cada opción de contacto te indicará lo que debes hacer para ver el enlace') ?> =D
        </li>
</ol>
<h2 id="Contacta_melo">
        5. <?= t('Contacto primario:') ?> Telegram
</h2>
<p><?= t('Es mi plataforma de contacto principal, dado que:') ?></p>
<ol type="a">
        <li>
                <?= t('Tiene espacio ilimitado gratuito en la nube (cómo Discord, Facebook, Instagram, X)') ?>
        </li>
        <li>
                <?= t('No me llena el espacio del celular ni depende del mismo (cómo Signal, WhatsApp)') ?>
        </li>
        <li>
                <?= t('No me llena un espacio en la nube que luego me van a cobrar (cómo Google Chat, Microsoft Teams)') ?>
        </li>
        <li>
                <?= t('Tiene muchos controles de notificación para no ser un adicto, incluyendo una aplicación dedicada para computador con la opción de mantenerse al lado del reloj') ?>
        </li>
        <li>
                <?= t('Tiene muchas otras herramientas (cómo bots, grupos tematizados) que uso en el día a día para hacer mi vida más fácil') ?>
                 =D
        </li>
</ol>
<p>
        <?= t('El enlace es') ?>
        <span class="telegram">*<?= t('tócame') ?> 😏*</span>
</p>
<h2 id="Contactos_con_menor_probabilidad_de_respuesta">
        6. <?= t('Contactos secundarios') ?>
</h2>
<p>
        <?= t('Básicamente me puedes encontrar en cualquier otra plataforma que no dependa del celular (si no la tengo me puedes invitar a registrarme, siempre me gusta probar cosas nuevas). La lista incompleta de plataformas en que me puedes contactar de manera privada y que tienen espacio ilimitado gratuito en la nube, en orden de mi preferencia por buenas notificaciones, sería:') ?>
        <ol type="a">
                <li>
                        Discord:
                        <?= t('es muy parecido a Telegram, pero se siente más lento y no es tan bueno notificando, sin embargo tiene bots mucho más potentes.') ?>
                        <?= t('El enlace es') ?>
                        <span class="discord">*<?= t('tócame') ?> 😏*</span>
                </li>
                <li>
                        X:
                        <?= t('no tiene aplicación para mantenerse al lado del reloj, sin embargo es bueno para notificar por medio del celular o correo.') ?>
                        <?= t('El enlace es') ?>
                        <span class="x">*<?= t('tócame') ?> 😏*</span>
                </li>
                <li>
                        Messenger, Facebook:
                        <?= t('tiene bastantes limitaciones, y notifica muy mal para personas no adictas.') ?>
                        <?= t('El enlace es') ?>
                        <span class="messenger">*<?= t('tócame') ?> 😏*</span>
                </li>
                <li>
                        Instagram:
                        <?= t('tiene bastantes limitaciones, y es parecido a Messenger. Notifica muy mal para personas no adictas.') ?>
                        <?= t('El enlace es') ?>
                        <span class="instagram">*<?= t('tócame') ?> 😏*</span>
                </li>
        </ol>
</p>
<h2 id="Chau">
        7. <?= t('Eso es toto, toto, totodo, amigos!') ?>
</h2>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p>b</p>
<p><?= t('Si llegaste aquí, te ganaste un beso') ?> 😗</p>
<p>
        <a href="https://github.com/KXPN/piyin.cc" target="_blank">
                https://github.com/KXPN/piyin.cc
        </a>
</p>
<script>
        (function() {
                const activadoresNodeList = document.querySelectorAll('span');
                activadoresNodeList.forEach(escucharClic);
                const elementosNombradosNodeList = (
                        document.querySelectorAll('[id]')
                );
                elementosNombradosNodeList.forEach(agregarAncla);
        })();
        function escucharClic(activadorNode) {
                activadorNode.addEventListener('click', mostrarEnlace);
        }
        function crearEnlaceNode(enlace) {
                const telegramEnlaceNode = document.createElement('a');
                telegramEnlaceNode.href = enlace;
                telegramEnlaceNode.target = '_blank';
                telegramEnlaceNode.innerText = (' [' + enlace + ']');
                return telegramEnlaceNode;
        }
        function agregarEnlaceYBorrarActivador(activadorNode, enlaceNode) {
                const activadorPadreNode = activadorNode.parentElement;
                activadorPadreNode.insertBefore(enlaceNode, activadorNode);
                activadorNode.remove();
        }
        function agregarEnlace(activadorNode, enlace) {
                if (activadorNode.classList.contains('inactivo')) {
                        return;
                }
                activadorNode.innerText = '';
                const enlaceNode = crearEnlaceNode(enlace);
                agregarEnlaceYBorrarActivador(activadorNode, enlaceNode);
        }
        function mostrarEnlace() {
                const activadorNode = this;
                const rutaYUsuarioPorPlataforma = {
                        discord: {
                                ruta: 'discord.com/users',
                                usuario: 'karlitoxpiyin',
                        },
                        instagram: {
                                ruta: 'ig.me/m',
                                usuario: 'karlitoxpiyin',
                        },
                        messenger: {
                                ruta: 'fb.me',
                                usuario: 'Piyin',
                        },
                        telegram: {
                                ruta: 't.me',
                                usuario: 'KarlitoXPiyiN',
                        },
                        x: {
                                ruta: 'x.com',
                                usuario: 'KarlitoXPiyiN',
                        },
                };
                const plataforma = activadorNode.className;
                const rutaYUsuario = rutaYUsuarioPorPlataforma[plataforma];
                const ruta = rutaYUsuario.ruta;
                const usuario = rutaYUsuario.usuario;
                const enlace = ('https://' + ruta + '/' + usuario);
                agregarEnlace(activadorNode, enlace);
        }
        function agregarAncla(elementoNode) {
                const anclaNode = document.createElement('a');
                anclaNode.className = 'ancla';
                anclaNode.href = ('#' + elementoNode.getAttribute('id'));
                anclaNode.innerText = ' #';
                elementoNode.appendChild(anclaNode);
        }
</script>
