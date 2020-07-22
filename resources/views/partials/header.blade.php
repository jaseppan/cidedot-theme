<header class="banner">
  <div class="container">
    <!--<div id="desktop-nav">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
      @endif
    </div>-->
    <nav class="navbar-inverse navbar-static-top navbar navbar-default navbar-expand-md" role="navigation">
      <div class="navbar-header">
        <a class="navbar-brand text-dark" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      </div>
      
      <button id="navbar-toggler" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse"
        aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>

      <div class="collapse navbar-collapse navbar-ex1-collapse bg-dark" id="navbar-collapse"> 
        
        @if (has_nav_menu('primary_navigation'))
          {!! 
            wp_nav_menu( array(
            'menu' => 'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
          );
          !!}
        @endif

      </div>
      
    </nav>
  </div>
  <div class="collapse navbar-collapse bg-dark">
      @if (has_nav_menu('primary_navigation'))
        {!! 
          wp_nav_menu( array(
          'menu' => 'top_menu',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'nav',
          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker())
        );
        !!}
      @endif
  </div>
</header>
