<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $queueTimeoutMinutes
 * @property int $maxConcurrentRuns
 */
class SchedulerConfiguration extends Shape
{
    /**
     * @param array{
     *     queueTimeoutMinutes?: int,
     *     maxConcurrentRuns?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
