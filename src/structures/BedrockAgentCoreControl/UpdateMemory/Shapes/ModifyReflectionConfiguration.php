<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EpisodicReflectionConfigurationInput|null $episodicReflectionConfiguration
 * @property CustomReflectionConfigurationInput|null $customReflectionConfiguration
 */
class ModifyReflectionConfiguration extends Shape
{
    /**
     * @param array{
     *     episodicReflectionConfiguration?: EpisodicReflectionConfigurationInput|null,
     *     customReflectionConfiguration?: CustomReflectionConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
