<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property string $position
 * @property 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE' $queue
 * @property 'Normal'|'Priority'|null $queuePriority
 */
class QuantumTaskQueueInfo extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     position: string,
     *     queue: 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE',
     *     queuePriority?: 'Normal'|'Priority'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
