<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $toolUseId
 * @property SensitiveJson $input
 * @property 'tool_use'|'server_tool_use'|'mcp_tool_use'|null $type
 * @property string|null $serverName
 */
class HarnessToolUseBlock extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     toolUseId: string,
     *     input: SensitiveJson,
     *     type?: 'tool_use'|'server_tool_use'|'mcp_tool_use'|null,
     *     serverName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
