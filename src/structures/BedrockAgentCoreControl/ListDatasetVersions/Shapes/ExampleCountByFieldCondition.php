<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'TURNS'|'INPUT'|'ACTOR_PROFILE'>|null $anyOf
 * @property int<0, max>|null $min
 * @property int<0, max>|null $max
 */
class ExampleCountByFieldCondition extends Shape
{
    /**
     * @param array{
     *     anyOf?: list<'TURNS'|'INPUT'|'ACTOR_PROFILE'>|null,
     *     min?: int<0, max>|null,
     *     max?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
