<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 */
class GeospatialHeatmapDataColor extends Shape
{
    /**
     * @param array{Color: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
