<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once('components/meta.html');?>
</head>
<body>
    <?php include_once('components/navbar.html') ?>
    <?php include_once('components/landing.html') ?>
    <?php include_once('components/socials.html') ?>
    <?php include_once('components/footer.html') ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/smartphoto@1.1.0/js/smartphoto.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/75ad4010ea.js" crossorigin="anonymous"></script>
<script src='js/effects.js'></script>
<script src="js/main.js"></script>

<script>
      (function() {
        fireFlies({"number_flies": 200, "color": "#F6B142", "size":"40" ,"elem": ".effects"});
      })();
      AOS.init();
</script>
</html>