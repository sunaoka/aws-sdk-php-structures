<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeOrderableClusterOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterVersion
 * @property string $ClusterType
 * @property string $NodeType
 * @property list<AvailabilityZone> $AvailabilityZones
 */
class OrderableClusterOption extends Shape
{
    /**
     * @param array{
     *     ClusterVersion?: string,
     *     ClusterType?: string,
     *     NodeType?: string,
     *     AvailabilityZones?: list<AvailabilityZone>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
