<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE' $queue
 * @property string $position
 * @property string|null $message
 */
class HybridJobQueueInfo extends Shape
{
    /**
     * @param array{
     *     queue: 'QUANTUM_TASKS_QUEUE'|'JOBS_QUEUE',
     *     position: string,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
