<footer>
    <div class="footer-container">
        <div class="footer_over_ons">
            <Header>
                Bedrijf
            </Header>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo ex consequatur, velit debitis tenetur
                ea nihil? Unde officiis aliquid accusamus vitae voluptate fuga fugit totam repellat, hic repellendus
                corrupti esse.</p>
        </div>
        <div class="footer_contact">
            <header>Brands</header>
            <p>terheijdenseweg 350</p>
            <p>4826AA Breda</p>
            <p>076-1234567</p>
            <p>info@brands-curio.nl</p>
        </div>
        <div class="footer_social_links">
            <i class="fab fa-youtube"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-telegram-plane"></i>
        </div>

    </div>
    <div class="footer_copyright">
        © {{ __('misc.copyright') }}
    </div>
</footer>


<!-- analytics code -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30506707-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
            '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<!-- Einde analytics code -->

<script language="Javascript" type="text/javascript">
    if (top.location != self.location) {
        top.location = self.location.href
    }

</script>
