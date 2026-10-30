<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MCP'|'HTTP'|'A2A'|'AGUI' $serverProtocol
 * @property int<8000, 12000>|null $port
 * @property string|null $path
 */
class ProtocolConfiguration extends Shape
{
    /**
     * @param array{
     *     serverProtocol: 'MCP'|'HTTP'|'A2A'|'AGUI',
     *     port?: int<8000, 12000>|null,
     *     path?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
