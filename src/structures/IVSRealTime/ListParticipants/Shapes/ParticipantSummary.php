<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $firstJoinTime
 * @property string|null $participantId
 * @property bool|null $published
 * @property 'CONNECTED'|'DISCONNECTED'|null $state
 * @property string|null $userId
 */
class ParticipantSummary extends Shape
{
    /**
     * @param array{
     *     firstJoinTime?: \Aws\Api\DateTimeResult|null,
     *     participantId?: string|null,
     *     published?: bool|null,
     *     state?: 'CONNECTED'|'DISCONNECTED'|null,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
