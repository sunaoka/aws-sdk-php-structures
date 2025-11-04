<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerConfiguration|null $containerConfiguration
 * @property CodeConfiguration|null $codeConfiguration
 */
class AgentRuntimeArtifact extends Shape
{
    /**
     * @param array{
     *     containerConfiguration?: ContainerConfiguration|null,
     *     codeConfiguration?: CodeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
