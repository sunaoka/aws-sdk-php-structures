<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MASTER'|'CORE'|'TASK' $InstanceRole
 * @property 'SPREAD'|'PARTITION'|'CLUSTER'|'NONE' $PlacementStrategy
 */
class PlacementGroupConfig extends Shape
{
    /**
     * @param array{
     *     InstanceRole: 'MASTER'|'CORE'|'TASK',
     *     PlacementStrategy?: 'SPREAD'|'PARTITION'|'CLUSTER'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
