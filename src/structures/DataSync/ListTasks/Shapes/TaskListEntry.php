<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TaskArn
 * @property 'AVAILABLE'|'CREATING'|'QUEUED'|'RUNNING'|'UNAVAILABLE'|null $Status
 * @property string|null $Name
 */
class TaskListEntry extends Shape
{
    /**
     * @param array{
     *     TaskArn?: string|null,
     *     Status?: 'AVAILABLE'|'CREATING'|'QUEUED'|'RUNNING'|'UNAVAILABLE'|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
