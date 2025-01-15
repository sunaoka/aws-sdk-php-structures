<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $queueTimeoutMinutes
 * @property int|null $maxConcurrentRuns
 */
class SchedulerConfiguration extends Shape
{
    /**
     * @param array{
     *     queueTimeoutMinutes?: int|null,
     *     maxConcurrentRuns?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
