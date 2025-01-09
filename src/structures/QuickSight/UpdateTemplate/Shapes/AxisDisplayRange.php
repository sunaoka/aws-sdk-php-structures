<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisDisplayMinMaxRange $MinMax
 * @property AxisDisplayDataDrivenRange $DataDriven
 */
class AxisDisplayRange extends Shape
{
    /**
     * @param array{
     *     MinMax?: AxisDisplayMinMaxRange,
     *     DataDriven?: AxisDisplayDataDrivenRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
