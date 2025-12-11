<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PUBLISH'|'SUBSCRIBE'>|null $capabilities
 * @property array<string, string>|null $attributes
 * @property string|null $userId
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 */
class ExchangedParticipantToken extends Shape
{
    /**
     * @param array{
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>|null,
     *     attributes?: array<string, string>|null,
     *     userId?: string|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
