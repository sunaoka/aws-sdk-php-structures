<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateParticipantToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $attributes
 * @property list<'PUBLISH'|'SUBSCRIBE'>|null $capabilities
 * @property int<1, 20160>|null $duration
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property string|null $participantId
 * @property string|null $token
 * @property string|null $userId
 */
class ParticipantToken extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>|null,
     *     duration?: int<1, 20160>|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null,
     *     participantId?: string|null,
     *     token?: string|null,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
