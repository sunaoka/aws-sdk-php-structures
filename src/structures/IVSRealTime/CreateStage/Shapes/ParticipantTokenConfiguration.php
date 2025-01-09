<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $duration
 * @property string $userId
 * @property array<string, string> $attributes
 * @property list<'PUBLISH'|'SUBSCRIBE'> $capabilities
 */
class ParticipantTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     duration?: int,
     *     userId?: string,
     *     attributes?: array<string, string>,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
