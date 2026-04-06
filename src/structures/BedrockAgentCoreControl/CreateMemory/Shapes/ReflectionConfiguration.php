<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomReflectionConfiguration|null $customReflectionConfiguration
 * @property EpisodicReflectionConfiguration|null $episodicReflectionConfiguration
 */
class ReflectionConfiguration extends Shape
{
    /**
     * @param array{
     *     customReflectionConfiguration?: CustomReflectionConfiguration|null,
     *     episodicReflectionConfiguration?: EpisodicReflectionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
