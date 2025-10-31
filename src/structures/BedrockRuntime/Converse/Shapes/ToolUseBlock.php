<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property string $name
 * @property Document $input
 * @property 'server_tool_use'|null $type
 */
class ToolUseBlock extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     name: string,
     *     input: Document,
     *     type?: 'server_tool_use'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
