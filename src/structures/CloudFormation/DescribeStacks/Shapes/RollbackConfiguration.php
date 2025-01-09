<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RollbackTrigger> $RollbackTriggers
 * @property int<0, 180> $MonitoringTimeInMinutes
 */
class RollbackConfiguration extends Shape
{
    /**
     * @param array{
     *     RollbackTriggers?: list<RollbackTrigger>,
     *     MonitoringTimeInMinutes?: int<0, 180>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
