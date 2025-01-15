<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateSnapshotScheduleActionParameters|null $createSnapshot
 */
class TargetAction extends Shape
{
    /**
     * @param array{createSnapshot?: CreateSnapshotScheduleActionParameters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
