<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $line
 * @property int $column
 * @property int $offset
 */
class Position extends Shape
{
    /**
     * @param array{
     *     line: int,
     *     column: int,
     *     offset: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
