<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeId
 * @property Endpoint|null $Endpoint
 * @property \Aws\Api\DateTimeResult|null $NodeCreateTime
 * @property string|null $AvailabilityZone
 * @property string|null $NodeStatus
 * @property string|null $ParameterGroupStatus
 */
class Node extends Shape
{
    /**
     * @param array{
     *     NodeId?: string|null,
     *     Endpoint?: Endpoint|null,
     *     NodeCreateTime?: \Aws\Api\DateTimeResult|null,
     *     AvailabilityZone?: string|null,
     *     NodeStatus?: string|null,
     *     ParameterGroupStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
