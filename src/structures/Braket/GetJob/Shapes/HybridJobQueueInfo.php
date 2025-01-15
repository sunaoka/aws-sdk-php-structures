<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property string $position
 * @property 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE' $queue
 */
class HybridJobQueueInfo extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     position: string,
     *     queue: 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
