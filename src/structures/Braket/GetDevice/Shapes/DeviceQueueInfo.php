<?php

namespace Sunaoka\Aws\Structures\Braket\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE' $queue
 * @property string $queueSize
 * @property 'Normal'|'Priority'|null $queuePriority
 */
class DeviceQueueInfo extends Shape
{
    /**
     * @param array{
     *     queue: 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE',
     *     queueSize: string,
     *     queuePriority?: 'Normal'|'Priority'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
