<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property list<ClusterNode>|null $ClusterNodes
 */
class SecondaryClusterInfo extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     ClusterNodes?: list<ClusterNode>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
