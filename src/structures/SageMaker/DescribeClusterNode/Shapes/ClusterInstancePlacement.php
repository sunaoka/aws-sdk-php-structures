<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 */
class ClusterInstancePlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
