<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialCoordinateBounds $Bounds
 * @property 'ENABLED'|'DISABLED' $MapNavigation
 */
class GeospatialMapState extends Shape
{
    /**
     * @param array{
     *     Bounds?: GeospatialCoordinateBounds,
     *     MapNavigation?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
