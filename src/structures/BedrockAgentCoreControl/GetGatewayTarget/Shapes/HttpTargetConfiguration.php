<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuntimeTargetConfiguration|null $agentcoreRuntime
 */
class HttpTargetConfiguration extends Shape
{
    /**
     * @param array{agentcoreRuntime?: RuntimeTargetConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
