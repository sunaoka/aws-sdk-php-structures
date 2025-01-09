<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueEnvironmentId
 * @property string $name
 * @property int $priority
 */
class QueueEnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     queueEnvironmentId: string,
     *     name: string,
     *     priority: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
