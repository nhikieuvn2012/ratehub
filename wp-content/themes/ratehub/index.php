<?php get_header();?>
        
        <!----------Slide Header---------------!>
        <?php
        $wp_query = new WP_Query();
        $count=0;
        $properties = array(
                'post_type' =>  'slidehome',
                'paged' => 1,
                'posts_per_page' => 3,
         );
        
        
        $query = $wp_query->query($properties);
        
        foreach ($query as $perres){
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($perres->ID) );
        ?>
                <div class="row txtp hidden-xs" style="<?php if($count>0) echo 'display: none';?>" id="p<?php echo $perres->ID;?>">
                    <div class="col-md-6"><a href=""><img class="img-responsive imgslide" src="<?php echo $feat_image;?>"/></a></div>
                    <div class="col-md-6"><?php echo $perres->post_content;?></div>
                </div>
        <?php
        $count++;
        }
        ?> 
        
        <div class="row txtp visible-xs"  id="p<?php echo $perres->ID;?>">
        <div class="col-md-6"><a href=""><img class="img-responsive" src="<?php echo $feat_image;?>"/></a></div>
        <div class="col-md-6"><?php echo $perres->post_content;?></div>
        </div>
        
        <div class="row bar1">
            <div class="col-md-12">&nbsp;</div>
        </div>
        
        <div class="row bar2 text-center">
            <?php
            $wp_query = new WP_Query();
            
            $properties = array(
                    'post_type' =>  'slidehome',
                    'paged' => 1,
                    'posts_per_page' => 3,
             );
            
            
            $query = $wp_query->query($properties);
            
            foreach ($query as $perres){
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($perres->ID) );
            ?>
                <div class="col-md-4 bntslide" id="<?php echo $perres->ID;?>"><a href=""><?php echo $perres->post_title;?></a></div>
            <?php
            }
            ?> 
        </div>
        
        <!----------End Slide---------------!>
        
        <!---Post----!>
        <div class="row" style="padding-top: 8px;">
            <div class="col-md-3">
                <h2>Why RateHub.ca?</h2>
                <strong>We are a search engine for Canada's best mortgage rates.</strong>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/a.jpg" width="39" height="60" style="float: right;margin: 5px;" />
                <h3>Lowest rates. Period.</h3>
                Only the most competitive banks and mortgage brokers make the cut.
            </div>
            
            <div class="col-md-3"> 
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/b.jpg" width="39" height="60" style="float: right;margin: 5px;" />
                <h3>Understand your mortgage</h3>
                Transparent, easy-to-understand, and complete mortgage information.
            </div>
            
            <div class="col-md-3">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/c.jpg" width="39" height="60" style="float: right;margin: 5px;" />
                <h3>Save up to $250 / month</h3>
                The best rates translate to $$$ savings every month.
                <h3>Join 300,000 users / month</h3>
                Canadians come to us before buying a home.

            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <h2>What makes us special?</h2>
                <strong>We empower you to make educated mortgage decisions.</strong>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/d.jpg" width="39" height="60" style="float: right;margin: 5px;" />
                <h3>Mortgage calculators</h3>
                Evaluate how much you can afford and calculate the total cost of home ownership.
            </div>
            
            <div class="col-md-3"> 
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/e.jpg" width="39" height="60" style="float: right;margin: 5px;" />
                <h3>Unbiased advice</h3>
                We are neither broker nor lender. We simply provide a platform for you to compare providers
            </div>
            
            <div class="col-md-3">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/f.jpg" width="39" height="60" style="float: right;margin: 5px;" />
                <h3>Free, no obligation service</h3>
                We provide this all at no cost to you. That's right, it's free!
            </div>
        </div>
        
        
        <div class="row text-center" style="margin-top: 10px;margin-bottom: 10px;padding-top: 5px;padding-bottom: 5px;border-top: solid 1px #EBEBEB;">
            <div class="col-md-2">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/scotiabank.jpg" width="141" height="41" />
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/laurentian.jpg" width="141" height="41" />
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/cibc.jpg" width="141" height="41" />
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/national-bank.jpg" width="141" height="41" />
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/bank-of-montreal.jpg" width="141" height="41" />
            </div>
            <div class="col-md-2">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/td-bank.jpg" width="141" height="41" />
            </div>
        </div>
        
        <div class="row" style="margin-top: 5px;margin-bottom: 10px;padding-top: 10px;padding-bottom: 5px;border-top: solid 1px #EBEBEB;">
            <div class="col-md-6 ratehub hidden-xs">
                        <table class="rates">
                        			<tbody><tr>
                        				<th colspan="4">
                        											<h3>Best Mortgage Interest Rates</h3>
                        																	<select name="province" id="province">
                        			<option value="">
                        				Please select			</option>
                        					<option value="BC">British Columbia</option>
                        				<option value="AB">Alberta</option>
                        				<option value="SK">Saskatchewan</option>
                        				<option value="MB">Manitoba</option>
                        				<option value="ON">Ontario</option>
                        				<option value="QC">Quebec</option>
                        				<option value="NB">New Brunswick</option>
                        				<option value="NS">Nova Scotia</option>
                        				<option value="PE">Prince Edward Island</option>
                        				<option value="NL">Newfoundland</option>
                        				<option selected="selected" value="YK">Yukon</option>
                        				<option value="NT">Northwest Territories</option>
                        				<option value="NU">Nunavut</option>
                        				</select>
                        		
                        		
                        									</th>
                        			</tr>
                        			<tr>
                        									<td><a class="rate-type" href="/best-mortgage-rates/1-year/fixed">1-Year Fixed</a></td>
                        					<td><a href="/best-mortgage-rates/1-year/fixed"><strong>2.99%</strong></a></td>
                        
                        					<td><a class="rate-type" href="/best-mortgage-rates/1-year/variable">1-Year Variable</a></td>
                        					<td><a href="/best-mortgage-rates/1-year/variable"><strong>N/A</strong></a></td>
                        							</tr>
                        			<tr class="mark">
                        									<td><a class="rate-type" href="/best-mortgage-rates/3-year/fixed">3-Year Fixed</a></td>
                        					<td><a href="/best-mortgage-rates/3-year/fixed"><strong>3.44%</strong></a></td>
                        
                        					<td><a class="rate-type" href="/best-mortgage-rates/3-year/variable">3-Year Variable</a></td>
                        					<td><a href="/best-mortgage-rates/3-year/variable"><strong>3.00%</strong></a></td>
                        							</tr>
                        			<tr>
                        									<td><a class="rate-type" href="/best-mortgage-rates/5-year/fixed">5-Year Fixed</a></td>
                        					<td><a href="/best-mortgage-rates/5-year/fixed"><strong>3.09%</strong></a></td>
                        
                        					<td><a class="rate-type" href="/best-mortgage-rates/5-year/variable">5-Year Variable</a></td>
                        					<td><a href="/best-mortgage-rates/5-year/variable"><strong>2.55%</strong></a></td>
                        							</tr>
                        			<tr class="sub">
                        				<td colspan="4">
                        					<dl>
                        						<dt>Rates Updated:</dt>
                        						<dd><time datetime="2014-07-26T23:35:54+00:00">26 July, 2014</time></dd>
                        					</dl>
                        					<a class="more" href="/best-mortgage-rates">See All</a>				</td>
                        			</tr>
                        		</tbody>
                                </table>
                <h2>Mortgage Monthly Newsletter</h2>
                Don't miss your chance to save! Sign up for our email newsletter:
                <input type="text" class="txtsingle" /><img src="<?php echo get_stylesheet_directory_uri();?>/images/btn-sign-up.gif" width="96" height="37"  />
            </div>
            <div class="col-md-6">
                <h2>Latest Mortgage News</h2>
                <ul class="news">
                <li>
					The Pros and Cons of Reverse Mortgages in Canada<a href="http://www.ratehub.ca/mortgage-blog/?p=11393">Read More</a><br />
					<time datetime="2014-07-23T00:00:00+00:00" class="date">22 July, 2014</time>
				</li>
				<li>
					How Much Will it Cost to Break My Mortgage with TD Bank?<a href="http://www.ratehub.ca/mortgage-blog/?p=11350">Read More</a><br />
					<time datetime="2014-07-21T00:00:00+00:00" class="date">20 July, 2014</time>
				</li>
				<li>
					Bank of Canada Interest Rate Announcement: July 16, 2014<a href="http://www.ratehub.ca/mortgage-blog/?p=11371">Read More</a><br />
					<time datetime="2014-07-16T00:00:00+00:00" class="date">15 July, 2014</time>
				</li>
				<li>
					How Your Down Payment Really Affects Your CMHC Insurance<a href="http://www.ratehub.ca/mortgage-blog/?p=11357">Read More</a><br />
					<time datetime="2014-07-14T00:00:00+00:00" class="date">13 July, 2014</time>
				</li>
						</ul>
            </div>
        </div>
        
        <!---- Ads ----!>
        <div class="row text-center" style="margin-top: 10px;margin-bottom: 10px;padding-top: 5px;padding-bottom: 5px;border-top: solid 1px #EBEBEB;">
            <div class="col-md-4">
                <p>
                    <i>"Unbiased view on the best and lowest rates available"</i>
                </p>
                
                <p>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/techvibes.png"  class="img-responsive" width="200" height="80" />
                </p>
            </div>
            <div class="col-md-4">
                <p>
                    <i>"Simplifies the mortgage process and provides a wealth of important information"</i>
                </p>
                
                <p>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/globeandmail.png"  class="img-responsive" width="306" height="38" />
                </p>
            </div>
            <div class="col-md-4">
                <p>
                    <i>"Consumers enjoy substantial savings"</i>
                </p>
                
                <p>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/yahoonews.jpg"   class="img-responsive" width="154" height="58" />
                </p>
            </div>
        </div>
        <!---End Ads---->
<?php 
get_footer();
?>