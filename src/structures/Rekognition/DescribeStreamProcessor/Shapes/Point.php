<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $X
 * @property float|null $Y
 */
class Point extends Shape
{
    /**
     * @param array{
     *     X?: float|null,
     *     Y?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
