<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY' $BaseMapStyle
 */
class GeospatialMapStyleOptions extends Shape
{
    /**
     * @param array{BaseMapStyle?: 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
