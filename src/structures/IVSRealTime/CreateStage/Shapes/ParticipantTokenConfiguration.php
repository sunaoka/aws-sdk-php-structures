<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $attributes
 * @property list<'PUBLISH'|'SUBSCRIBE'>|null $capabilities
 * @property int<1, 20160>|null $duration
 * @property string|null $userId
 */
class ParticipantTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>|null,
     *     duration?: int<1, 20160>|null,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
