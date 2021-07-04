<div id='menuMobile' onclick='openMobileMenu()'>
    <div class='hamburguesa'>
        <div style='margin-top:0px'></div>
        <div></div>
        <div  style='margin-bottom:0px'></div>
    </div>
    <div class='labtag'>Menú</div>
</div>
<div id='layerMenuMob' onclick="closeMobileMenu()">

</div>
<div id='MenuMobDespl'>
    <div class='logomb'>
        <a href='/inicio'>
            <img src='/assets/logo.png' id='menisolog'>
        </a>
    </div>
    <div class='menuMobint'>
    <a href='/home'><div class='menuopt <?php echo $selc[0];?>'>Home</div></a>
        <a href='/Empleos'><div class='menuopt <?php echo $selc[1];?>'>Empleos</div></a>
        <a href='/Blog'><div class='menuopt <?php echo $selc[2];?>'>Blog</div></a>
        <a href='/Noticias'><div class='menuopt <?php echo $selc[3];?>'>Noticias</div></a>
        <a href='/Login'><div class='menuopt <?php echo $selc[4];?>'>Login</div></a>
        <a href='/Consejos'><div class='menuopt <?php echo $selc[5];?>'>Consejos</div></a>

    </div>
</div>
<header id='barraMenu' class=''>
    <div class='logo'>
        <a href='/inicio'>
            <div id='logosFlot'>
                <img src='/assets/logos/logo.png' id='menisolog' class='logomenu'>
                <img src='/assets/logos/isosystem.png' id='menisotp'  class='logomenu'>
            </div>
            <div id='logosNoFlot'>
                <img src='/assets/logos/logo_wt.png' id='menisolog'  class='logomenu_wt'>
                <img src='/assets/logos/isosystem_wt.png' id='menisotp'  class='logomenu_wt'>
            </div>
        </a>
        </div>
    <menu class='menu'>
        <a href='/home'><div class='menuopt <?php echo $selc[0];?>'>Home</div></a>
        <a href='/Empleos'><div class='menuopt <?php echo $selc[1];?>'>Empleos</div></a>
        <a href='/Blog'><div class='menuopt <?php echo $selc[2];?>'>Blog</div></a>
        <a href='/Noticias'><div class='menuopt <?php echo $selc[3];?>'>Noticas</div></a>
        <a href='/Login'><div class='menuopt <?php echo $selc[4];?>'>Login</div></a>
        <a href='/Consejos'><div class='menuopt <?php echo $selc[5];?>'>Consejos</div></a>

    </menu>
</header>

    