<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialCoordinateBounds $Bounds
 * @property 'AUTO'|'MANUAL' $MapZoomMode
 */
class GeospatialWindowOptions extends Shape
{
    /**
     * @param array{
     *     Bounds?: GeospatialCoordinateBounds,
     *     MapZoomMode?: 'AUTO'|'MANUAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
