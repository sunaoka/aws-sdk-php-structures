<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $X
 * @property float $Y
 */
class Point extends Shape
{
    /**
     * @param array{
     *     X?: float,
     *     Y?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
