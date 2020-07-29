<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div class="wrap container" role="document">
    
      <div id="main-row" class="row">
        <div id="widgets-container" class="col-lg-3 col-md-4">
          <aside class="sidebar">
            @include('partials.sidebar')
         </aside>
        </div>
        <div id="content-container" class="col-lg-9 col-md-8">
          @php do_action('get_header') @endphp
          @include('partials.header')
          <div class="content">
            <main class="main">
              @yield('content')
            </main>
          </div>
        </div>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
