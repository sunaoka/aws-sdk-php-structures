<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $maxInQueueJobRuns
 * @property int<1, 1000>|null $maxConcurrentJobRuns
 */
class SchedulerConfiguration extends Shape
{
    /**
     * @param array{
     *     maxInQueueJobRuns?: int<1, 1000>|null,
     *     maxConcurrentJobRuns?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
