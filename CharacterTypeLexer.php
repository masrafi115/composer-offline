<?php

class CharacterTypeLexer extends Doctrine\Common\Lexer\AbstractLexer
{
    const T_UPPER =  1;
    const T_LOWER =  2;
    const T_NUMBER = 3;

    protected function getCatchablePatterns(): array
    {
        return [
            '[a-bA-Z0-9]',
        ];
    }

    protected function getNonCatchablePatterns(): array
    {
        return [];
    }

    protected function getType(&$value): int
    {
        if (is_numeric($value)) {
            return self::T_NUMBER;
        }

        if (strtoupper($value) === $value) {
            return self::T_UPPER;
        }

        if (strtolower($value) === $value) {
            return self::T_LOWER;
        }
    }
}
