<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property list<HarnessToolResultContentBlock> $content
 * @property 'success'|'error'|null $status
 * @property 'tool_use'|'server_tool_use'|'mcp_tool_use'|null $type
 */
class HarnessToolResultBlock extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     content: list<HarnessToolResultContentBlock>,
     *     status?: 'success'|'error'|null,
     *     type?: 'tool_use'|'server_tool_use'|'mcp_tool_use'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
