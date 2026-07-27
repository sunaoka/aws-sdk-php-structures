<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $currentInQueueJobRuns
 * @property int<0, max>|null $currentConcurrentJobRuns
 */
class SchedulerStatus extends Shape
{
    /**
     * @param array{
     *     currentInQueueJobRuns?: int<0, max>|null,
     *     currentConcurrentJobRuns?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
