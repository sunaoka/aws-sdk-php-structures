<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleClusterMarker $SimpleClusterMarker
 */
class ClusterMarker extends Shape
{
    /**
     * @param array{SimpleClusterMarker?: SimpleClusterMarker} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
