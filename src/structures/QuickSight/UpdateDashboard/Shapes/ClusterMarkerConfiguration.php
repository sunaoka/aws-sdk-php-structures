<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterMarker $ClusterMarker
 */
class ClusterMarkerConfiguration extends Shape
{
    /**
     * @param array{ClusterMarker?: ClusterMarker} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
