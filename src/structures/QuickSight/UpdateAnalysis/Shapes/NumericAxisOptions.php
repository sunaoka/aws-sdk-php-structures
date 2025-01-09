<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisScale $Scale
 * @property AxisDisplayRange $Range
 */
class NumericAxisOptions extends Shape
{
    /**
     * @param array{
     *     Scale?: AxisScale,
     *     Range?: AxisDisplayRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
