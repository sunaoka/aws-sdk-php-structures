<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskArn
 * @property 'AVAILABLE'|'CREATING'|'QUEUED'|'RUNNING'|'UNAVAILABLE' $Status
 * @property string $Name
 * @property 'BASIC'|'ENHANCED' $TaskMode
 */
class TaskListEntry extends Shape
{
    /**
     * @param array{
     *     TaskArn?: string,
     *     Status?: 'AVAILABLE'|'CREATING'|'QUEUED'|'RUNNING'|'UNAVAILABLE',
     *     Name?: string,
     *     TaskMode?: 'BASIC'|'ENHANCED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
