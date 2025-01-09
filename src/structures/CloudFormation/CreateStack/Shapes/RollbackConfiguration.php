<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RollbackTrigger> $RollbackTriggers
 * @property int $MonitoringTimeInMinutes
 */
class RollbackConfiguration extends Shape
{
    /**
     * @param array{
     *     RollbackTriggers?: list<RollbackTrigger>,
     *     MonitoringTimeInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
