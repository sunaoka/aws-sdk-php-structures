<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeOrderableClusterOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterVersion
 * @property string|null $ClusterType
 * @property string|null $NodeType
 * @property list<AvailabilityZone>|null $AvailabilityZones
 */
class OrderableClusterOption extends Shape
{
    /**
     * @param array{
     *     ClusterVersion?: string|null,
     *     ClusterType?: string|null,
     *     NodeType?: string|null,
     *     AvailabilityZones?: list<AvailabilityZone>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
