<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialHeatmapColorScale|null $HeatmapColor
 */
class GeospatialHeatmapConfiguration extends Shape
{
    /**
     * @param array{HeatmapColor?: GeospatialHeatmapColorScale|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
