<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 20160>|null $duration
 * @property string|null $userId
 * @property array<string, string>|null $attributes
 * @property list<'PUBLISH'|'SUBSCRIBE'>|null $capabilities
 */
class ParticipantTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     duration?: int<1, 20160>|null,
     *     userId?: string|null,
     *     attributes?: array<string, string>|null,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
