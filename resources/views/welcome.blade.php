@extends('layouts/sitelayout')

@section('main-sec')


<div class="home">
  <div class="background_image" style="background-image:linear-gradient(to bottom,rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.3)),
        url('{{asset('musica_assets/images/homeback.jpg')}}')"></div>
  <div class="home_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_content">
            <div class="home_title">
              <h1>Connect on parendeTao</h1>
            </div>
            <div class="home_subtitle">Discover, stream, and share a constantly expanding mix of music from emerging and major artists around the world.</div>
            <div class="button_border home_button trans_200"><a href="#">Sign up for free</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="shows">
  <div class="container">
    <div class="row shows_row">
      <div class="col-lg-4">
        <div class="show">
          <div class="show_image">
            <a href="episode.html">
              <img src="{{asset('musica_assets/images/show_1.jpg')}}" alt="https://unsplash.com/@icons8">
            </a>
            <div class="show_tags">
              <div class="tags">
              </div>
            </div>
            <div class="show_play_icon"><img src="{{asset('musica_assets/images/play.svg')}}"></div>
          </div>
          <div class="show_content">
            <div class="show_info d-flex flex-row align-items-start justify-content-start">
              <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                <div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
              </div>
              <div class="show_comments">
                <a href="#">
                  <div class="d-flex flex-row align-items-center justify-content-start">
                    <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>

                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="show">
          <div class="show_image">
            <a href="episode.html">
              <img src="{{asset('musica_assets/images/show_2.jpg')}}" alt="https://unsplash.com/@pawel_czerwinski">
            </a>
            <div class="show_tags">
              <div class="tags">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#">Experiment</a></li>
                </ul>
              </div>
            </div>
            <div class="show_play_icon"><img src="{{asset('musica_assets/images/play.svg')}}" alt="https://www.flaticon.com/authors/cole-bemis"></div>
          </div>
          <div class="show_content">
            <div class="show_date"><a href="#">24 September, 2018</a></div>
            <div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit.</a></div>
            <div class="show_info d-flex flex-row align-items-start justify-content-start">
              <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                <div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
                <div class="show_fav_count">2371</div>
              </div>
              <div class="show_comments">
                <a href="#">
                  <div class="d-flex flex-row align-items-center justify-content-start">
                    <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
                    <div class="show_comments_count">88 Comments</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="show">
          <div class="show_image">
            <a href="episode.html">
              <img src="{{asset('musica_assets/images/show_3.jpg')}}" alt="https://unsplash.com/@trevcole">
            </a>
            <div class="show_tags">
              <div class="tags">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#">Music</a></li>
                </ul>
              </div>
            </div>
            <div class="show_play_icon"><img src="{{asset('musica_assets/images/play.svg')}}" alt="https://www.flaticon.com/authors/cole-bemis"></div>
          </div>
          <div class="show_content">
            <div class="show_date"><a href="#">24 September, 2018</a></div>
            <div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit.</a></div>
            <div class="show_info d-flex flex-row align-items-start justify-content-start">
              <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                <div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
                <div class="show_fav_count">2371</div>
              </div>
              <div class="show_comments">
                <a href="#">
                  <div class="d-flex flex-row align-items-center justify-content-start">
                    <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
                    <div class="show_comments_count">88 Comments</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class="button_fill shows_button"><a href="#">browse shows</a></div>
      </div>
    </div>
  </div>
</div>



<div class="weekly" style="background: url('{{asset('musica_assets/images/newback2.jpg')}}');">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('musica_assets/images/homeback4.jpg')}}" data-speed="0.8"></div>
  <div class="container">
    <div class="row row-eq-height">

      <div class="col-lg-6">
        <div class="weekly_content d-flex flex-column align-items-start justify-content-lg-center justify-content-start">
          <div>
            <div class="weekly_title">
              <h1>Bi-weekly episodes</h1>
            </div>
            <div class="weekly_text">
              <p>Cras congue et risus eget congue. Integer id justo non orci suscipit cursus a scelerisque libero.
                Fusce in tortor mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Maecenas euismod sed magna.</p>
            </div>
            <div class="shops d-flex flex-row align-items-start justify-content-start flex-wrap">
              <div class="button_border"><a href="#">Amazon</a></div>
              <div class="button_border"><a href="#">Itunes</a></div>
              <div class="button_border"><a href="#">Spotify</a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        {{-- <div class="weekly_image">
              <img src="{{asset('musica_assets/images/show_3.jpg')}}" alt="">
        <div class="logo">
          <a href="#" class="d-flex flex-row"><span>my</span>podcast<div><img src="{{asset('musica_assets/images/play_2.png')}}" alt="">
            </div></a>
        </div>
      </div> --}}
    </div>
  </div>
</div>
</div>




<div class="shows_2">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="shows_2_title">By Category</div>
      </div>
    </div>
    <div class="row shows_2_row">

      <div class="col-xl-3 col-md-6">
        <div class="show">
          <div class="show_image">
            <a href="episode.html">
              <img src="{{asset('musica_assets/images/show_4.jpg')}}" alt="https://unsplash.com/@h4rd3n">
              <div class="show_play_icon"><img src="{{asset('musica_assets/images/play.svg')}}" alt="https://www.flaticon.com/authors/cole-bemis"></div>
              <div class="show_title_2">Cras malesuada ipsum sapien.</div>
            </a>
            <div class="show_tags">
              <div class="tags">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#">travel</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="show">
          <div class="show_image">
            <a href="episode.html">
              <img src="{{asset('musica_assets/images/show_5.jpg')}}" alt="https://unsplash.com/@gohobo">
              <div class="show_play_icon"><img src="{{asset('musica_assets/images/play.svg')}}" alt="https://www.flaticon.com/authors/cole-bemis"></div>
              <div class="show_title_2">Cras malesuada ipsum sapien.</div>
            </a>
            <div class="show_tags">
              <div class="tags">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#">lifestyle</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="show">
          <div class="show_image">
            <a href="episode.html">
              <img src="{{asset('musica_assets/images/show_6.jpg')}}" alt="https://unsplash.com/@zacharykeimig">
              <div class="show_play_icon"><img src="{{asset('musica_assets/images/play.svg')}}" alt="https://www.flaticon.com/authors/cole-bemis"></div>
              <div class="show_title_2">Cras malesuada ipsum sapien.</div>
            </a>
            <div class="show_tags">
              <div class="tags">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#">music</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="show">
          <div class="show_image">
            <a href="episode.html">
              <img src="{{asset('musica_assets/images/show_7.jpg')}}" alt="https://unsplash.com/@bkview">
              <div class="show_play_icon"><img src="{{asset('musica_assets/images/play.svg')}}" alt="https://www.flaticon.com/authors/cole-bemis"></div>
              <div class="show_title_2">Cras malesuada ipsum sapien.</div>
            </a>
            <div class="show_tags">
              <div class="tags">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="#">travel</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class="button_fill shows_2_button"><a href="#">browse shows</a></div>
      </div>
    </div>
  </div>
</div>



@endsection