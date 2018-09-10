<?php

class WordGenerator
{

    /**
     * List of all available words
     *
     * @return array
     */
    private static function wordList(): array
    {
        return array(
            "hello",
            "car",
            "impossible",
        );
    }

    /**
     * Generate a random word.
     *
     * @return String
     */
    public static function generateWord(): String
    {
        $words = WordGenerator::wordList();
        $maxWordCount = count($words) - 1;
        $wordId = rand(0, $maxWordCount);

        return strtoupper($words[$wordId]);
    }
}
