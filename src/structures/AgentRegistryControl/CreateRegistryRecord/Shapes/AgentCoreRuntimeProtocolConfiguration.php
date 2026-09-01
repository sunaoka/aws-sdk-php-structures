<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTTP'|'A2A'|'MCP'|'AGUI'|null $serverProtocol
 */
class AgentCoreRuntimeProtocolConfiguration extends Shape
{
    /**
     * @param array{serverProtocol?: 'HTTP'|'A2A'|'MCP'|'AGUI'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
