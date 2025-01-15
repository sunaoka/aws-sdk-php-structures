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
     *     recordingState?: 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
