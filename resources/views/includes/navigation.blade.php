<style>
    nav{
        top: 0;
        left: 0;
        right: 0;
        position: fixed;
        width: 100%;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(2px);
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        box-shadow: 0px 0px 10px 0px rgba(1, 1, 1, 0.2);
        z-index: 10;
    }
    .logo{
    }
    .logo img{
        left: 50%;
        width: 80px;
        position: absolute;
        transform: translate(-50%);
        top: 16px;

    }

    .cart{
        display: flex;
        justify-content: end;
        margin-right: 16px;
        align-items: center;
        gap:20px;
    }
    .cart img{
        width: 24px;
    }
    .cart a{
        text-decoration: none;
        color: black;
    }
    .menu{
        display: flex;
        align-items: center;
        margin-left: 16px;
        cursor: pointer;
    }
    .menu img{
        width: 24px;
    }
    .aside{
        position: absolute;
        left: -600px;
        height: 100vh;
        width: 30vw;
        background: #f8f8f8;
        display: flex;
        justify-content: center;
    }
    .aside.active{
        transition-delay: 100ms;
        opacity: 1;
        left: 0;
        transition: 400ms;
    }
    .aside.active .menudarkness{
        display: flex;
    }
    .aside .close{
        cursor: pointer;
        position: absolute;
        right: 32px;
        top: 24px;
        z-index: 100;
    }
    .aside .close img{
        width: 24px;
    }

    .aside .menudarkness{
        display: none;
        position: fixed;
        background-color: rgba(1, 1, 1, 0.2);
        height: 100vh;
        width: 100vw;
        top: 0;
        left: 0;
        z-index: -1 ;
    }
    .aside .link{
        margin-top: 64px;

        display: flex;
        flex-direction: column;
        width: 100%;
        text-align: center;
    }
    .aside .link a{
        color: black;
        text-decoration: none;
        position: relative;
        padding: 8px 0 8px 0;
        width: 100%;
        background-color: #f8f8f8;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .aside .link a img{
        width: 24px;
        height: 24px;
        margin-right: 8px;
    }
    .aside .link h1{
        font-size: 32px;
    }

    .aside .link a:hover{
        background-color: #f0f0f0;
        transition: 400ms;
        transition-delay: 20ms;
    }
    @media only screen and (max-width: 480px) {
    /* Mobil*/
    .aside{
        width: 100vw;
    }
}
@media only screen and (min-width: 481px) and (max-width: 768px) {
    /* Tabletler */
    .aside{
        width: 50vw;
    }
}
</style>
<nav>
<div class="menu">
<img src="{{ asset('assets/menu.png') }}" alt="Menu">

</div>

    <div class="aside">
        <div class="menudarkness"></div>

        <div class="close">
        <img src="{{ asset('assets/close.png') }}" alt="Close">

        </div>

        <div class="link">
            <h1>Category</h1>
            <a href="{{route('bulb')}}"><img src="{{ asset('assets/bulb.png') }}" alt="Bulb"><h3>Bulb - Lamba</h3></a>
            <a href="{{route('wire')}}"><img src="{{ asset('assets/coil.png') }}" alt="Coil"><h3>Wire - Kablo</h3></a>
            <a href="{{route('triplesocket')}}"><img src="{{ asset('assets/wire.png') }}" alt="triple socket"><h3>Triple Socket - Üçlü </h3></a>
            <a href="{{route('transformer')}}"><img src="{{ asset('assets/transformer.png') }}" alt="Transformer"><h3>Transformer - Trafo</h3></a>
        </div>


    </div>

<div class="logo">
    <a href="{{route('index')}}"><img src="{{ asset('assets/logo.png') }}" alt="Logo"></a>
</div>

<div class="cart">
    <a href="{{route('login')}}">Login</a>
    <a href="{{route('cart')}}"><img src="{{ asset('assets/shopping-cart.png') }}" alt="cart"></a>
</div>
</nav>
<script>
    var menuToggle = document.querySelector('.menu');
    var closeToogle = document.querySelector('.close');
    var aside = document.querySelector('.aside');
    var menudarkness = document.querySelector('.menudarkness');

    menuToggle.addEventListener("click", function(){
   aside.classList.add('active');
});

    closeToogle.addEventListener("click", function(){
        aside.classList.remove('active');
});
menudarkness.addEventListener("click", function(){
    aside.classList.remove('active');
});
</script>