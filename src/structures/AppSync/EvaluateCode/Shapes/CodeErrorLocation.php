<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $line
 * @property int $column
 * @property int $span
 */
class CodeErrorLocation extends Shape
{
    /**
     * @param array{
     *     line?: int,
     *     column?: int,
     *     span?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
