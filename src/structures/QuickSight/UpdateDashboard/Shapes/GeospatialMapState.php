<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialCoordinateBounds|null $Bounds
 * @property 'ENABLED'|'DISABLED'|null $MapNavigation
 */
class GeospatialMapState extends Shape
{
    /**
     * @param array{
     *     Bounds?: GeospatialCoordinateBounds|null,
     *     MapNavigation?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
