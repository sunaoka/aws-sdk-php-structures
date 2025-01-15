<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResizeClusterMessage|null $ResizeCluster
 * @property PauseClusterMessage|null $PauseCluster
 * @property ResumeClusterMessage|null $ResumeCluster
 */
class ScheduledActionType extends Shape
{
    /**
     * @param array{
     *     ResizeCluster?: ResizeClusterMessage|null,
     *     PauseCluster?: PauseClusterMessage|null,
     *     ResumeCluster?: ResumeClusterMessage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
