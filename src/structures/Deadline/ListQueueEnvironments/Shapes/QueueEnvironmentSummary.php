<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<0, 10000> $priority
 * @property string $queueEnvironmentId
 */
class QueueEnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     priority: int<0, 10000>,
     *     queueEnvironmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
