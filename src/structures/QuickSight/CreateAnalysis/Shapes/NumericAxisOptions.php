<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisScale|null $Scale
 * @property AxisDisplayRange|null $Range
 */
class NumericAxisOptions extends Shape
{
    /**
     * @param array{
     *     Scale?: AxisScale|null,
     *     Range?: AxisDisplayRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
