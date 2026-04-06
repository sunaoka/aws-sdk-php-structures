<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property string $name
 * @property 'server_tool_use'|null $type
 */
class ToolUseBlockStart extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     name: string,
     *     type?: 'server_tool_use'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
