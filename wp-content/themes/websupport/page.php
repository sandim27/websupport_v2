<?php get_header(); ?>

	<main role="main">
		 <header>
            <div class="wrapper">
              <a href="/" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Professional Webcare"/>
                <span>Professional Webcare</span>
              </a>
              <nav id="nav">
                <ul>
                  <li><a href="#section01">About us</a></li>
                  <li><a href="#section02">Services</a></li>
                  <li><a href="#section03">FAQ</a></li>
                  <li><a href="#section04">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </header>

          <section id="section01">
            <div class="wrapper row">
              <div class="col-md-8 section01tagwrap">
                <h3>We improve user conversion by optimizing page loading times</h3>
                <p>Over 72% of all websites are significantly underperforming in areas of performance, mobility, security, or the combination of thereof.
                  We can help to address those issues through support, optimization, and development.  We built our teams of the best talent available and can address any issue or develop any solution you can imagine. Challenge us!</p>
                <a href="/" class="read-more">Read more about</a>
              </div>
              <div class="col-md-4 section01form">
                <h2>Let’s talk</h2>
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
              <div class="row section02wrap">
                <div class="col-md-4 section02col">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon-repair.png"/>
                  <h3>Performance</h3>
                  <p>Website performance can affect usability and conversion. 40% of site visitors will likely leave a site if it takes more than 3 seconds to load. 54% of those will never return. We'll make sure this doesn't’ happen to your site.</p>
                  <a href="/" class="buy-now">Buy now</a>
                </div>
                <div class="col-md-4 section02col">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon-cus.png"/>
                  <h3>Mobility</h3>
                  <p>We’ll optimize or update your website to make it mobile ready and responsive on any devices, tablet or phone. Over 50% of all US web traffic came from mobile devices. If you're not able to serve your audience on mobile platforms, you are losing a huge chunk of your audience and lowering trust to your brand.</p>
                  <a href="/" class="buy-now">Buy now</a>
                </div>
                <div class="col-md-4 section02col">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon-set.png"/>
                  <h3>Security</h3>
                  <p>Your website is a representation of your organization or your brand, and often your first interaction with the potential customers, which is very important to build trust and relationships. If your website isn’t safe and secure, those critical business relationships can be compromised. With our services, you can be sure they never will.</p>
                  <a href="/" class="buy-now">Buy now</a>
                </div>
              </div>
            </div>
          </section>

          <section id="section03">
            <div class="wrapper row">
              <div class="col-md-8 section03faq">
                <!-- Tab panes -->
                <div class="tab-content col-md-6">
                  <div role="tabpanel" class="tab-pane active" id="q1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-repair-white.png"/>
                    <h3>Performance</h3>
                    <p>Website performance can affect usability and conversion. 40% of site visitors will likely leave a site if it takes more than 3 seconds to load. 54% of those will never return. We'll make sure this doesn't’ happen to your site.</p>
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
                <div class="col-md-6">
                  <h2>FAQ</h2>
                  <div class="row">
                    <input type="text" class="form-control" placeholder="Search"/>
                  </div>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#q1" aria-controls="q1" role="tab" data-toggle="tab">Why do I need my website working on mobile?</a></li>
                    <li role="presentation"><a href="#q2" aria-controls="q2" role="tab" data-toggle="tab">What are the other adverse consequences for bad performance in addition to the page being slow?</a></li>
                    <li role="presentation"><a href="#q3" aria-controls="q3" role="tab" data-toggle="tab">What can be done to increase website speed?</a></li>
                    <li role="presentation"><a href="#q4" aria-controls="q4" role="tab" data-toggle="tab">Why should I be concerned with my website's speed?</a></li>
                    <li role="presentation"><a href="#q5" aria-controls="q5" role="tab" data-toggle="tab">Can I convert my existing website into a responsive one?</a></li>
                    <li role="presentation"><a href="#q6" aria-controls="q6" role="tab" data-toggle="tab">Why should I upgrade my CMS to the latest version?</a></li>
                    <li role="presentation"><a href="#q7" aria-controls="q7" role="tab" data-toggle="tab">Why would anyone hack my site?</a></li>
                    <li role="presentation"><a href="#q8" aria-controls="q8" role="tab" data-toggle="tab">I'm using WordPress, isn’t it already secure?</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 section03support">
                <h2>Support</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/laptop.jpg"/>
                <p>Website performance can affect usability and conversion. 40% of site visitors will likely leave a site if it takes more than 3 seconds to load. 54% of those will never return. We'll make sure this doesn't’ happen to your site.</p>
                <a href="/" class="purchase-now">Purchase now</a>
              </div>
            </div>
          </section>

          <section id="section04">
            <div class="wrapper">
              <h2>Direction</h2>
              <article>
                <h3><i class="fa fa-check" aria-hidden="true"></i>Template Design</h3>
                <p>We use a powerful template framework, adding logic, functions, and structure for mobile layouts.</p>
              </article>
              <article>
                <h3><i class="fa fa-check" aria-hidden="true"></i>Full Website Development</h3>
                <p>We build websites from scrath with extreme functionality, flat rate quotes and warrantied </p>
              </article>
              <article>
                <h3><i class="fa fa-check" aria-hidden="true"></i>Website Speed Optimization</h3>
                <p>Optimize your website for speed, faster load times, improved visitor experience, and reduced bandwidth.</p>
              </article>
              <article>
                <h3><i class="fa fa-check" aria-hidden="true"></i>Search Engine Optimization</h3>
                <p>Search Engine Optimization built into the very foundation of your template</p>
              </article>
              <article>
                <h3><i class="fa fa-check" aria-hidden="true"></i>Malware Removal And Security</h3>
                <p>Some idiot took your website down and now you have a google malware penalty and your site is gone.</p>
              </article>
              <article>
                <h3><i class="fa fa-check" aria-hidden="true"></i>Mobile App Development</h3>
                <p>70% off standard mobile app pricing. Download from Google Play and App Store.</p>
              </article>
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
              <div class="wrap06">
                <article>
                  <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icon01-sec06.png" alt="Professional Webcare"/>Mobile Template Design</h3>
                  <p>We use a powerful template framework, adding logic, functions, and structure for mobile layouts.</p>
                </article>
                <article>
                  <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icon04-sec06.png" alt="Professional Webcare"/>Mobile Template Design</h3>
                  <p>We use a powerful template framework, adding logic, functions, and structure for mobile layouts.</p>
                </article>
                <article>
                  <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icon02-sec06.png" alt="Professional Webcare"/>Search Engine Optimization</h3>
                  <p>Search Engine Optimization built into the very foundation of your template</p>
                </article>
                <article>
                  <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icon05-sec06.png" alt="Professional Webcare"/>Search Engine Optimization</h3>
                  <p>Search Engine Optimization built into the very foundation of your template</p>
                </article>
                <article>
                  <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icon03-sec06.png" alt="Professional Webcare"/>Search Engine Optimization</h3>
                  <p>Search Engine Optimization built into the very foundation of your template</p>
                </article>
                <article>
                  <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icon06-sec06.png" alt="Professional Webcare"/>Search Engine Optimization</h3>
                  <p>Search Engine Optimization built into the very foundation of your template</p>
                </article>
               </div>
            </div>
          </section>

         <section id="section07">
           <div id="swiper-slider">
             <div class="wrapper">
               <h2>Just Fixed</h2>
               <div class="swiper-container">
                 <div class="swiper-wrapper">

                   <div class="swiper-slide">
                     <div class="slide-contayner">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/customer-sec07.png" alt="Professional Webcare"/>
                       <h3>Henry Mann</h3>
                       <h4>Hair Genesis</h4>
                       <p>My Website Repair has provided me with very fast web hosting as well as support when I need to update my website or make changes which are beyond me knowledge. Excellent support and service!</p>
                     </div>
                   </div>

                   <div class="swiper-slide">
                     <div class="slide-contayner">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/customer-sec07.png" alt="Professional Webcare"/>
                       <h3>Henry Mann</h3>
                       <h4>Hair Genesis</h4>
                       <p>My Website Repair has provided me with very fast web hosting as well as support when I need to update my website or make changes which are beyond me knowledge. Excellent support and service!</p>
                     </div>
                   </div>

                   <div class="swiper-slide">
                     <div class="slide-contayner">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/customer-sec07.png" alt="Professional Webcare"/>
                       <h3>Henry Mann</h3>
                       <h4>Hair Genesis</h4>
                       <p>My Website Repair has provided me with very fast web hosting as well as support when I need to update my website or make changes which are beyond me knowledge. Excellent support and service!</p>
                     </div>
                   </div>

                 </div>
               </div>
               <div class="swiper-pagination"></div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
             </div>
           </div>
           <div id="customers">
             <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-01.png" alt="Professional Webcare"/></div>
             <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-02.png" alt="Professional Webcare"/></div>
             <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-03.png" alt="Professional Webcare"/></div>
             <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-04.png" alt="Professional Webcare"/></div>
             <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-05.png" alt="Professional Webcare"/></div>
             <div><img src="<?php echo get_template_directory_uri(); ?>/img/customers-06.png" alt="Professional Webcare"/></div>
           </div>
         </section>

          <footer>
            <div class="wrapper row">
              <div class="col-md-4">
                <div class="footer-logo">Professional webcare</div>
              </div>
              <div class="col-md-4">
                <a href="/">8 800 200 600</a>
                <p>12110 Sunset Hills Rd #600, Reston, VA 20190</p>
              </div>
              <div class="col-md-4">
                <a href="/" class="linkedin">Linkedin</a>
                <p>© 2015-2016 Professional WebCare</p>
              </div>
            </div>
          </footer>

          <script src="<?php echo get_template_directory_uri(); ?>/js/vendor.min.js"></script>
	</main>
<?php get_footer(); ?>
