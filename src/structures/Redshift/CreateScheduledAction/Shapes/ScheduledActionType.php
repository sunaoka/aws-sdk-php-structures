<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResizeClusterMessage $ResizeCluster
 * @property PauseClusterMessage $PauseCluster
 * @property ResumeClusterMessage $ResumeCluster
 */
class ScheduledActionType extends Shape
{
    /**
     * @param array{
     *     ResizeCluster?: ResizeClusterMessage,
     *     PauseCluster?: PauseClusterMessage,
     *     ResumeCluster?: ResumeClusterMessage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
