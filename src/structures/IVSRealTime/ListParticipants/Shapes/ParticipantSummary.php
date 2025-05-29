<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $participantId
 * @property string|null $userId
 * @property 'CONNECTED'|'DISCONNECTED'|null $state
 * @property \Aws\Api\DateTimeResult|null $firstJoinTime
 * @property bool|null $published
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED'|null $recordingState
 * @property 'SOURCE'|'REPLICA'|'NONE'|null $replicationType
 * @property 'ACTIVE'|'STOPPED'|null $replicationState
 * @property string|null $sourceStageArn
 * @property string|null $sourceSessionId
 */
class ParticipantSummary extends Shape
{
    /**
     * @param array{
     *     participantId?: string|null,
     *     userId?: string|null,
     *     state?: 'CONNECTED'|'DISCONNECTED'|null,
     *     firstJoinTime?: \Aws\Api\DateTimeResult|null,
     *     published?: bool|null,
     *     recordingState?: 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED'|null,
     *     replicationType?: 'SOURCE'|'REPLICA'|'NONE'|null,
     *     replicationState?: 'ACTIVE'|'STOPPED'|null,
     *     sourceStageArn?: string|null,
     *     sourceSessionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
