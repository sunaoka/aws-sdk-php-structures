<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetRepositorySyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property 'FAILED'|'INITIATED'|'IN_PROGRESS'|'SUCCEEDED'|'QUEUED' $Status
 * @property list<RepositorySyncEvent> $Events
 */
class RepositorySyncAttempt extends Shape
{
    /**
     * @param array{
     *     StartedAt: \Aws\Api\DateTimeResult,
     *     Status: 'FAILED'|'INITIATED'|'IN_PROGRESS'|'SUCCEEDED'|'QUEUED',
     *     Events: list<RepositorySyncEvent>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
