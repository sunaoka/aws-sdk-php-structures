<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, 10000>|null $maxInQueueJobRuns
 * @property int<1, 10000>|null $maxConcurrentJobRuns
 */
class SchedulerConfiguration extends Shape
{
    /**
     * @param array{
     *     maxInQueueJobRuns?: int<100, 10000>|null,
     *     maxConcurrentJobRuns?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
