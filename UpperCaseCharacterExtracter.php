<?php
class UpperCaseCharacterExtracter
{
    public function __construct(private CharacterTypeLexer $lexer)
    {
    }

    /** @return list<string> */
    public function getUpperCaseCharacters(string $string): array
    {
        $this->lexer->setInput($string);
        $this->lexer->moveNext();

        $upperCaseChars = [];
        while (true) {
            if (!$this->lexer->lookahead) {
                break;
            }

            $this->lexer->moveNext();

            if ($this->lexer->token['type'] === CharacterTypeLexer::T_UPPER) {
                $upperCaseChars[] = $this->lexer->token['value'];
            }
        }

        return $upperCaseChars;
    }
}
