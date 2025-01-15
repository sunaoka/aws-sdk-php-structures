<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimpleClusterMarker|null $SimpleClusterMarker
 */
class ClusterMarker extends Shape
{
    /**
     * @param array{SimpleClusterMarker?: SimpleClusterMarker|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
