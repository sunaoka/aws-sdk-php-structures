<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetParticipant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $attributes
 * @property \Aws\Api\DateTimeResult|null $firstJoinTime
 * @property string|null $participantId
 * @property bool|null $published
 * @property 'CONNECTED'|'DISCONNECTED'|null $state
 * @property string|null $userId
 */
class Participant extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
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
