<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $fleetId
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'ENDED'|null $targetLifecycleStatus
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $workerId
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     fleetId: string,
     *     lifecycleStatus: 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED',
     *     sessionId: string,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     targetLifecycleStatus?: 'ENDED'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
