<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateSnapshotScheduleActionParameters $createSnapshot
 */
class TargetAction extends Shape
{
    /**
     * @param array{createSnapshot?: CreateSnapshotScheduleActionParameters} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
