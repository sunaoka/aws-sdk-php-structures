<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerConfiguration|null $containerConfiguration
 */
class HarnessEnvironmentArtifact extends Shape
{
    /**
     * @param array{containerConfiguration?: ContainerConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
