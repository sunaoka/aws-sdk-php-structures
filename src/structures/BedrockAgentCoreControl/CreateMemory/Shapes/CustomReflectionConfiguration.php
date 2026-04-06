<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EpisodicReflectionOverride|null $episodicReflectionOverride
 */
class CustomReflectionConfiguration extends Shape
{
    /**
     * @param array{episodicReflectionOverride?: EpisodicReflectionOverride|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
