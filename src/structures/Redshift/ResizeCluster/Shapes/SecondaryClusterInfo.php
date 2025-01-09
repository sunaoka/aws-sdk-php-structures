<?php

namespace Sunaoka\Aws\Structures\Redshift\ResizeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property list<ClusterNode> $ClusterNodes
 */
class SecondaryClusterInfo extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     ClusterNodes?: list<ClusterNode>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
