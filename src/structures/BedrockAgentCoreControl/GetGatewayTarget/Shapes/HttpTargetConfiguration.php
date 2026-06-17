<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuntimeTargetConfiguration|null $agentcoreRuntime
 * @property PassthroughTargetConfiguration|null $passthrough
 */
class HttpTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     agentcoreRuntime?: RuntimeTargetConfiguration|null,
     *     passthrough?: PassthroughTargetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
