<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOLID'|'TRANSPARENT' $FillStyle
 */
class BoxPlotStyleOptions extends Shape
{
    /**
     * @param array{FillStyle?: 'SOLID'|'TRANSPARENT'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
