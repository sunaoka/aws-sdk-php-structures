<?php

namespace Sunaoka\Aws\Structures\Proton\GetRepositorySyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RepositorySyncEvent> $events
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'INITIATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 */
class RepositorySyncAttempt extends Shape
{
    /**
     * @param array{
     *     events: list<RepositorySyncEvent>,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     status: 'INITIATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'QUEUED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
