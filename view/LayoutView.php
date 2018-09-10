<?php

class LayoutView
{

    /*
    One render function to render everything to
    ther client in the beginning
     */
    public function render($buttons)
    {
        echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Hang the man</title>
        </head>
        <body>
          <h1>Workshop 1</h1>

          <div class="container">
              <form action="" method="get">
              ' . $buttons->render() . '
              </form>
          </div>
         </body>
      </html>
    ';
    }
}
