<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetExamples\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'TURNS'|'INPUT'|'ACTOR_PROFILE'>|null $anyOf
 */
class ExampleFieldCondition extends Shape
{
    /**
     * @param array{anyOf?: list<'TURNS'|'INPUT'|'ACTOR_PROFILE'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
