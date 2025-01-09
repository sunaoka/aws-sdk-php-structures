<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $participantId
 * @property string $userId
 * @property 'CONNECTED'|'DISCONNECTED' $state
 * @property \Aws\Api\DateTimeResult $firstJoinTime
 * @property bool $published
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED' $recordingState
 */
class ParticipantSummary extends Shape
{
    /**
     * @param array{
     *     participantId?: string,
     *     userId?: string,
     *     state?: 'CONNECTED'|'DISCONNECTED',
     *     firstJoinTime?: \Aws\Api\DateTimeResult,
     *     published?: bool,
     *     recordingState?: 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
