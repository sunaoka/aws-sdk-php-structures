<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerConfiguration|null $containerConfiguration
 */
class AgentRuntimeArtifact extends Shape
{
    /**
     * @param array{containerConfiguration?: ContainerConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
