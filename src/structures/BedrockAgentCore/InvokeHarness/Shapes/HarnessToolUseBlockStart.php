<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property string $name
 * @property 'tool_use'|'server_tool_use'|'mcp_tool_use'|null $type
 * @property string|null $serverName
 */
class HarnessToolUseBlockStart extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     name: string,
     *     type?: 'tool_use'|'server_tool_use'|'mcp_tool_use'|null,
     *     serverName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
