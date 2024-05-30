        <footer class="footer">
           <a class="footer__chambreSyndic" href="https://www.chambre-syndicale-sophrologie.fr/">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/chambre-syndicale.png'); ?>" alt="Chambre Syndicale de la Sophrologie">
           </a>
            <div class="footer__contact">
                <p class="contactTitle">
                    Me contacter :
                </p>
                <p>
                    Delphine Dragani <br>
                    Sophrologue à Montbonnot Saint Martin, Grenoble et ses environs <br> <br>
                    Tél : +33 (0) 6 98 27 74 11 <br>
                    Mail : delphinedragani-sophro@outlook.com
                </p>
                <div class="legal">
                    <p>
                        © 2023 Delphine Dragani
                    </p>
                    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>
</html>