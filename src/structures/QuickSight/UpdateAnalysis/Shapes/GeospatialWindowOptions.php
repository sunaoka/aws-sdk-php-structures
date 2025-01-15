<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialCoordinateBounds|null $Bounds
 * @property 'AUTO'|'MANUAL'|null $MapZoomMode
 */
class GeospatialWindowOptions extends Shape
{
    /**
     * @param array{
     *     Bounds?: GeospatialCoordinateBounds|null,
     *     MapZoomMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
