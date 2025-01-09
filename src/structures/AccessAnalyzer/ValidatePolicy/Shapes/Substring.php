<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $start
 * @property int $length
 */
class Substring extends Shape
{
    /**
     * @param array{
     *     start: int,
     *     length: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
