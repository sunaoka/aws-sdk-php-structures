<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOLID'|'TRANSPARENT'|null $FillStyle
 */
class BoxPlotStyleOptions extends Shape
{
    /**
     * @param array{FillStyle?: 'SOLID'|'TRANSPARENT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
