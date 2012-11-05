      <hr>

      <footer>
        <p>&copy; <?= date('Y'); ?> <a target="_blank" href="<?= COMPANY_LINK; ?>"><?= COMPANY; ?></a></p>
      </footer>

    </div><!--/.fluid-container-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="<?= HOME; ?>/assets/js/bootstrap/js/bootstrap.prefixed.js"></script>
    <script src="<?= HOME; ?>/assets/js/google-code-prettify/prettify.js"></script>
    <script type="text/javascript">
    var home = "<?= HOME; ?>";
    </script>


    <script type="text/javascript">
    $(function(){

        var $window = $(window);

        // side bar
        $('#sidebar').affix({
            offset: {
                top: 100, 
                bottom: 0
            }
        });

        $('body').scrollspy({target: '#sidebar_holder'});

    });
    </script>

  </body>
</html>
