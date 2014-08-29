<?php get_header();?>
        <div class="row">
             <div class="col-md-8 pagebox" >
             <h2><?php echo $post->post_title;?></h2>
                <hr class="hrgreen" />
                 <?php echo apply_filters( 'the_content',$post->post_content);?>
             </div>
             
             <div class="col-md-4" style="padding-left: 2px;" >
<div id="sidebar-menu">
<ul class="root">
<li> <a href="/best-mortgage-rates">Compare Mortgage Rates</a> 
<ul>
<li><a href="/best-mortgage-rates/5-year/fixed">5-year fixed mortgage rates</a></li>
<li><a href="/best-mortgage-rates/5-year/variable">5-year variable mortgage rates</a></li>
<li class="selected"><a href="/best-mortgage-rates">Best mortgage rates</a></li>
</ul>
</li>
<li> <a href="/banks/bank-mortgage-rates">Bank mortgage rates</a> 
<ul>
<li><a href="/banks/td-bank-mortgage-rates">TD mortgage rates</a></li>
<li><a href="/banks/rbc-royal-bank-mortgage-rates">RBC mortgage rates</a></li>
<li><a href="/banks/bank-mortgage-rates">All bank mortgage rates</a></li>
</ul>
</li>
<li> <a href="/mortgage-calculators">Mortgage Calculators</a> 
<ul>
<li><a href="/mortgage-payment-calculator">Mortgage payment calculator</a></li>
<li><a href="/mortgage-affordability-calculator">Mortgage affordability calculator</a></li>
<li><a href="/mortgage-calculators">All calculators</a></li>
</ul>
</li>
<li> <a href="/first-time-home-buyer">Education Centre</a> 
<ul>
<li><a href="/mortgage-term-vs-amortization">Term vs. amortization</a></li>
<li><a href="/variable-or-fixed-mortgage">Variable vs. fixed mortgage</a></li>
<li><a href="/mortgage-pre-payment">Prepayment options</a></li>
<li><a href="/mortgage-down-payment">Mortgage down payment</a></li>
<li><a href="/cmhc-mortgage-insurance">Mortgage default insurance</a></li>
<li><a href="/rrsp-home-buyer">RRSP for down payment</a></li>
<li><a href="/closing-costs">Closing costs</a></li>
<li><a href="/land-transfer-tax">Land transfer tax</a></li>
<li><a href="/first-time-home-buyer-tax-credit">First-time home buyer tax credit</a></li>
<li><a href="/bank-vs-mortgage-broker">Mortgage broker vs. bank</a></li>
<li><a href="/mortgage-pre-approval">Mortgage approval process</a></li>
</ul>
</li>
<li> <a href="/brokers/broker-mortgage-rates">Broker mortgage rates</a> 
<ul>
<li><a href="/brokers/dominion-lending-mortgage-rates">Dominion mortgage rates</a></li>
<li><a href="/brokers/invis-mortgage-rates">Invis mortgage rates</a></li>
<li><a href="/brokers/broker-mortgage-rates">All broker mortgage rates</a></li>
</ul>
</li>
</ul>
</div>
             </div>
        </div>
<?php 
get_footer();
?>