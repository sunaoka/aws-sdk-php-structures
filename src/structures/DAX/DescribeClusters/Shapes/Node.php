<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeId
 * @property Endpoint $Endpoint
 * @property \Aws\Api\DateTimeResult $NodeCreateTime
 * @property string $AvailabilityZone
 * @property string $NodeStatus
 * @property string $ParameterGroupStatus
 */
class Node extends Shape
{
    /**
     * @param array{
     *     NodeId?: string,
     *     Endpoint?: Endpoint,
     *     NodeCreateTime?: \Aws\Api\DateTimeResult,
     *     AvailabilityZone?: string,
     *     NodeStatus?: string,
     *     ParameterGroupStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
