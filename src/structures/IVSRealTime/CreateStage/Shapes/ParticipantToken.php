<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $participantId
 * @property string|null $token
 * @property string|null $userId
 * @property array<string, string>|null $attributes
 * @property int<1, 20160>|null $duration
 * @property list<'PUBLISH'|'SUBSCRIBE'>|null $capabilities
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 */
class ParticipantToken extends Shape
{
    /**
     * @param array{
     *     participantId?: string|null,
     *     token?: string|null,
     *     userId?: string|null,
     *     attributes?: array<string, string>|null,
     *     duration?: int<1, 20160>|null,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
