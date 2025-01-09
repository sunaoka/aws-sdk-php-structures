<?php

namespace Sunaoka\Aws\Structures\Braket\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE' $queue
 * @property 'Normal'|'Priority' $queuePriority
 * @property string $queueSize
 */
class DeviceQueueInfo extends Shape
{
    /**
     * @param array{
     *     queue: 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE',
     *     queuePriority?: 'Normal'|'Priority',
     *     queueSize: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
