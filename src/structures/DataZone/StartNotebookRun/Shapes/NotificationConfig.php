<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SUCCEEDED'|'FAILED'|'STOPPED'|'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'> $notifyOn
 */
class NotificationConfig extends Shape
{
    /**
     * @param array{notifyOn: list<'SUCCEEDED'|'FAILED'|'STOPPED'|'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
