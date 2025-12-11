<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $namespaces
 */
class EpisodicReflectionConfiguration extends Shape
{
    /**
     * @param array{namespaces: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
