<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>Privacy Buff</title>
        <link rel="stylesheet" type="text/css" href="https://webfonts.staticly.ict.rocks/nunito/nunito.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
        <?php if( isset( $stylesheet ) && $stylesheet ): ?><link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>"><?php endif; ?>
    </head>
    <body class="font-nunito">
        <section class="container">
            <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
        </section>
    </body>
</html>
