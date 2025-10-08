<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MCP'|'HTTP'|'A2A' $serverProtocol
 */
class ProtocolConfiguration extends Shape
{
    /**
     * @param array{serverProtocol: 'MCP'|'HTTP'|'A2A'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
