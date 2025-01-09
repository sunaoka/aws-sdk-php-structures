<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 */
class ClusterInstancePlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
