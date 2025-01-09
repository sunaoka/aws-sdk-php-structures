<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MonitoringTimeInMinutes
 * @property list<RollbackTrigger> $RollbackTriggers
 */
class RollbackConfiguration extends Shape
{
    /**
     * @param array{
     *     MonitoringTimeInMinutes?: int,
     *     RollbackTriggers?: list<RollbackTrigger>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
