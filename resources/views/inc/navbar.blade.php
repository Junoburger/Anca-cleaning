<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/anca4_smile.png"   alt="" class="logo animated flipInY">
            </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav navbar-right">

              <li><a class="cool-link" href="/">Home</a></li>
              <li><a class="cool-link" href="/about">About</a></li>
              <li><a class="cool-link" href="/contact">Contact</a></li>

              <li><a class="cool-link" href="/service">Services</a></li>
              <li><a class="cool-link" href="/partners">Partners</a></li>

            </ul>

            <!-- Right Side Of Navbar -->

                <!-- Authentication Links -->




        </div>
    </div>
</nav>

<script>

    var logo = document.getElementsByTagName("img")[0];

    logo.addEventListener("mouseenter", function(){
        logo.classList.remove("flipInY");
    logo.classList.add("infinite");
    logo.classList.add("pulse");

    });
        logo.addEventListener("mouseout", function(){
        logo.classList.add("flipInY");
    logo.classList.remove("infinite");
    logo.classList.remove("pulse");

    });
</script>
