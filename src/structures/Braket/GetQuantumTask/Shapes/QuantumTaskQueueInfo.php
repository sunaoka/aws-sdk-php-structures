<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE' $queue
 * @property string $position
 * @property 'Normal'|'Priority'|null $queuePriority
 * @property string|null $message
 */
class QuantumTaskQueueInfo extends Shape
{
    /**
     * @param array{
     *     queue: 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE',
     *     position: string,
     *     queuePriority?: 'Normal'|'Priority'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
