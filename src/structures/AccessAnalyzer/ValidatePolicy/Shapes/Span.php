<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Position $start
 * @property Position $end
 */
class Span extends Shape
{
    /**
     * @param array{
     *     start: Position,
     *     end: Position
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
