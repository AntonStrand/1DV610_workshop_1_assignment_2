<?php

class ButtonView
{

    /*
    One render function to render everything to
    ther client in the beginning.

    Function returns 25 buttons.
     */
    public function render()
    {
        $alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'M', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $characterButton = '';
        $buttonList = '';

        // Generate button list
        foreach ($alphabet as $letter) {
            $characterButton = '<input name="character" type="submit" value="' . $letter . '">  </input>';
            $buttonList .= $characterButton;
        }

        return $buttonList;
    }

}
