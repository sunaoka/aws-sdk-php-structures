<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $position
 * @property 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE' $queue
 * @property 'Normal'|'Priority' $queuePriority
 */
class QuantumTaskQueueInfo extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     position: string,
     *     queue: 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE',
     *     queuePriority?: 'Normal'|'Priority'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
