<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MonitoringTimeInMinutes
 * @property list<RollbackTrigger>|null $RollbackTriggers
 */
class RollbackConfiguration extends Shape
{
    /**
     * @param array{
     *     MonitoringTimeInMinutes?: int|null,
     *     RollbackTriggers?: list<RollbackTrigger>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
