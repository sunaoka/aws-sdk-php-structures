<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $participantId
 * @property string $token
 * @property string $userId
 * @property array<string, string> $attributes
 * @property int $duration
 * @property list<'PUBLISH'|'SUBSCRIBE'> $capabilities
 * @property \Aws\Api\DateTimeResult $expirationTime
 */
class ParticipantToken extends Shape
{
    /**
     * @param array{
     *     participantId?: string,
     *     token?: string,
     *     userId?: string,
     *     attributes?: array<string, string>,
     *     duration?: int,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>,
     *     expirationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
