<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MCPGatewayConfiguration|null $mcp
 */
class GatewayProtocolConfiguration extends Shape
{
    /**
     * @param array{mcp?: MCPGatewayConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
