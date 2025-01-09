<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueEnvironmentId
 * @property string $name
 * @property int<0, 10000> $priority
 */
class QueueEnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     queueEnvironmentId: string,
     *     name: string,
     *     priority: int<0, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
