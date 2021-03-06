<?php get_header(); ?>

	<main role="main">

		 <header>
            <div class="wrapper">
              <a href="/" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Professional Webcare"/>
                <span>Professional Webcare</span>
              </a>
              <nav id="nav">
                <a href="javascript:" class="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <ul class="nav-list">
                  <li><a href="#section01">About us</a></li>
                  <li><a href="#section02">Services</a></li>
                  <li><a href="#section03">FAQ</a></li>
                  <li><a href="#section08">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </header>

          <section id="section01">
            <div class="wrapper row">
              <div class="section01tagwrap">
                <h3>We improve user conversion by optimizing page loading times</h3>
                <p>Over 72% of all websites are significantly underperforming in areas of performance, mobility, security, or the combination of thereof.
                  We can help to address those issues through support, optimization, and development.  We built our teams of the best talent available and can address any issue or develop any solution you can imagine. Challenge us!</p>
                <a href="/" class="read-more">Read more about</a>
              </div>
              <div class="section01form">
                <h2>Let's talk</h2>
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Note"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Sent</button>
                </form>
              </div>
            </div>
          </section>

          <section id="section02">
            <div class="wrapper">
              <h2>Services</h2>
              <div class="section02wrap">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('section02') ) { ?> <?php } ?>
              </div>
            </div>
          </section>

          <section id="section03">
            <div class="wrapper">
              <div class="section03faq">
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="q1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-repair-white.png"/>
                    <h3>Performance</h3>
                    <p>Website performance can affect usability and conversion. 40% of site visitors will likely leave a site if it takes more than 3 seconds to load. 54% of those will never return. We'll make sure this doesn't happen to your site.</p>
                    <a href="/" class="buy-now">Buy now</a>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="q2">2</div>
                  <div role="tabpanel" class="tab-pane" id="q3">3</div>
                  <div role="tabpanel" class="tab-pane" id="q4">4</div>
                  <div role="tabpanel" class="tab-pane" id="q5">5</div>
                  <div role="tabpanel" class="tab-pane" id="q6">6</div>
                  <div role="tabpanel" class="tab-pane" id="q7">7</div>
                  <div role="tabpanel" class="tab-pane" id="q8">8</div>
                </div>
                <!-- Nav tabs -->
                <div class="tab-question">
                  <h2>FAQ</h2>
                  <div class="row searcharea">
                    <input type="text" class="form-control" placeholder="Search"/>
                    <a href="javascript:" class="searchbtn"><i class="fa fa-search" aria-hidden="true"></i></a>
                  </div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#q1" aria-controls="q1" role="tab" data-toggle="tab">Why do I need my website working on mobile?</a></li>
                    <li role="presentation"><a href="#q2" aria-controls="q2" role="tab" data-toggle="tab">What are the other adverse consequences for bad performance in addition to the page being slow?</a></li>
                    <li role="presentation"><a href="#q3" aria-controls="q3" role="tab" data-toggle="tab">What can be done to increase website speed?</a></li>
                    <li role="presentation"><a href="#q4" aria-controls="q4" role="tab" data-toggle="tab">Why should I be concerned with my website's speed?</a></li>
                    <li role="presentation"><a href="#q5" aria-controls="q5" role="tab" data-toggle="tab">Can I convert my existing website into a responsive one?</a></li>
                    <li role="presentation"><a href="#q6" aria-controls="q6" role="tab" data-toggle="tab">Why should I upgrade my CMS to the latest version?</a></li>
                    <li role="presentation"><a href="#q7" aria-controls="q7" role="tab" data-toggle="tab">Why would anyone hack my site?</a></li>
                    <li role="presentation"><a href="#q8" aria-controls="q8" role="tab" data-toggle="tab">I'm using WordPress, isn't it already secure?</a></li>
                  </ul>
                </div>
              </div>
              <div class="section03support">
                <div class="section03support-wrap">
                    <h2>Support</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/laptop.jpg"/>
                    <p>Website performance can affect usability and conversion. 40% of site visitors will likely leave a site if it takes more than 3 seconds to load. 54% of those will never return. We'll make sure this doesn't happen to your site.</p>
                    <a href="/" class="purchase-now">Purchase now</a>
                </div>
              </div>
            </div>
          </section>

          <section id="section04">
            <div class="wrapper">
              <h2>Direction</h2>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('section04') ) { ?> <?php } ?>
            </div>
          </section>

          <section id="section05">
            <div class="wrapper">
              <div class="green-step"><img src="<?php echo get_template_directory_uri(); ?>/img/icon01-sec05.png" alt="Professional Webcare"/></div>
              <div class="about-step">
                <h3>Call Us</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/arroy-sec05.png" alt="Professional Webcare"/>
                <p>8 800 200 600</p>
              </div>
              <div class="green-step"><img src="<?php echo get_template_directory_uri(); ?>/img/icon02-sec05.png" alt="Professional Webcare"/></div>
              <div class="about-step">
                <h3>Tell Us</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/img/arroy-sec05.png" alt="Professional Webcare"/>
                <p>about a problem</p>
              </div>
              <div class="green-step"><img src="<?php echo get_template_directory_uri(); ?>/img/icon03-sec05.png" alt="Professional Webcare"/></div>
            </div>
          </section>

          <section id="section06">
            <div class="wrapper">
             <h2>Privilege</h2>
              <div class="wrap06">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('section06') ) { ?> <?php } ?>
               </div>
            </div>
          </section>

         <section id="section07">
           <div id="swiper-slider">
             <div class="wrapper">
               <h2>Just Fixed</h2>
               <div class="swiper-container">
                 <div class="swiper-wrapper">
                      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('swiper-slides') ) { ?> <?php } ?>
                 </div>
               </div>
               <div class="swiper-pagination"></div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
             </div>
           </div>
           <div id="customers">
             <div class="wrapper">
               <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-01.png" alt="Professional Webcare"/></div>
               <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-02.png" alt="Professional Webcare"/></div>
               <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-03.png" alt="Professional Webcare"/></div>
               <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-04.png" alt="Professional Webcare"/></div>
               <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-05.png" alt="Professional Webcare"/></div>
               <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-06.png" alt="Professional Webcare"/></div>
             </div>
           </div>
         </section>

         <section id="section08">
            <div class="wrapper">
               <h2>Contact</h2>
               <div class="form">
                  <div class="first-part-contact">
                    <input type="text" placeholder="Email"/>
                    <input type="text" placeholder="Tel"/>
                    <input type="text" placeholder="Web"/>
                  </div>
                  <div class="second-part-contact">
                    <input type="text" placeholder="Subject"/>
                    <input type="text" placeholder="Message"/>
                    <input type="text"/>
                  </div>
                  <input type="submit" value="Sent" class="submit">
               </div>
            </div>
         </section>
	</main>
<?php get_footer(); ?>
