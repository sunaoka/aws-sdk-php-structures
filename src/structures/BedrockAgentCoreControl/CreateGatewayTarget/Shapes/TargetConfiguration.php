<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property McpTargetConfiguration|null $mcp
 */
class TargetConfiguration extends Shape
{
    /**
     * @param array{mcp?: McpTargetConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
