<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $fleetId
 * @property string $workerId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property 'ENDED' $targetLifecycleStatus
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     fleetId: string,
     *     workerId: string,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     lifecycleStatus: 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED',
     *     endedAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string,
     *     targetLifecycleStatus?: 'ENDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
