<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterMarker|null $ClusterMarker
 */
class ClusterMarkerConfiguration extends Shape
{
    /**
     * @param array{ClusterMarker?: ClusterMarker|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
