<?php

namespace Sunaoka\Aws\Structures\Polly\GetLexicon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Content
 * @property string|null $Name
 */
class Lexicon extends Shape
{
    /**
     * @param array{
     *     Content?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
