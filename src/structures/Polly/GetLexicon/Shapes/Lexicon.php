<?php

namespace Sunaoka\Aws\Structures\Polly\GetLexicon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 * @property string $Name
 */
class Lexicon extends Shape
{
    /**
     * @param array{
     *     Content?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
