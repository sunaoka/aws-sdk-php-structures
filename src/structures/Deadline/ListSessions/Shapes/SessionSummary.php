<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $fleetId
 * @property string $workerId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property 'ENDED'|null $targetLifecycleStatus
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
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     targetLifecycleStatus?: 'ENDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
