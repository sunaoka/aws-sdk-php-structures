<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisDisplayMinMaxRange|null $MinMax
 * @property AxisDisplayDataDrivenRange|null $DataDriven
 */
class AxisDisplayRange extends Shape
{
    /**
     * @param array{
     *     MinMax?: AxisDisplayMinMaxRange|null,
     *     DataDriven?: AxisDisplayDataDrivenRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
