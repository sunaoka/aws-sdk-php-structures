<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RollbackTrigger>|null $RollbackTriggers
 * @property int<0, 180>|null $MonitoringTimeInMinutes
 */
class RollbackConfiguration extends Shape
{
    /**
     * @param array{
     *     RollbackTriggers?: list<RollbackTrigger>|null,
     *     MonitoringTimeInMinutes?: int<0, 180>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
