<header class="banner">
  <div class="container">
    <a class="brand text-dark" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <!--<div id="desktop-nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
      @endif
    </div>-->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="navbar-header">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse"
          aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
          <div class="animated-icon"><span></span><span></span><span></span></div>
        </button>
      </div>
    </nav>
    <!-- Collect the nav links, forms, and other content for toggling -->
  </div>
  <div class="collapse navbar-collapse bg-dark" id="navbar-collapse">
    <div class="container">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
      @endif
    </div>
  </div>
</header>
