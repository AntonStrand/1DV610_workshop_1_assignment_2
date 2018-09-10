<?php

// TODO: Make the provided word persistent.
// TODO: Test if all characters has been found.
// TODO: Count number of tries.

class GameController
{
    private $word;
    private $wrongCharacters;
    private $correctCharacters;

    /**
     * Constructor for GameController.
     * Please provide the word of the game.
     *
     * @param string $word
     */
    public function __construct(string $word)
    {
        // The word should be saved between button clicks.
        $this->word = $word;
        $this->handleCharacterButtonClick();
    }

    /**
     * Handle selected character.
     *
     * @return void
     */
    private function handleCharacterButtonClick()
    {
        if (isset($_GET['character']) && $_GET['character'] != null) {
            $choosenCharacter = $_GET['character'];

            if ($this->isMatch($choosenCharacter)) {
                $this->correctCharacters[] = $choosenCharacter;
            } else {
                $this->wrongCharacters[] = $choosenCharacter;
            }

            // Debugging purpose. The rendering should be handle in one of the View classes.
            echo 'this is you choosen char ' . $this->word . $choosenCharacter . $this->isMatch($choosenCharacter);
        }
    }

    /**
     * Test if character is in word.
     *
     * @param string $testChar
     * @return boolean
     */
    private function isMatch(string $testChar)
    {
        return (strpos($this->word, $testChar) > 0)
        ? true
        : false;
    }
}
