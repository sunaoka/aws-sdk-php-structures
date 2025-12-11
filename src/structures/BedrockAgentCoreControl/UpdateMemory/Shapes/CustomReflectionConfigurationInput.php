<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EpisodicOverrideReflectionConfigurationInput|null $episodicReflectionOverride
 */
class CustomReflectionConfigurationInput extends Shape
{
    /**
     * @param array{episodicReflectionOverride?: EpisodicOverrideReflectionConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
