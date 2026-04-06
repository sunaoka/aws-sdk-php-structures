<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContentBlock> $content
 * @property ToolResultStructuredContent|null $structuredContent
 * @property bool|null $isError
 */
class CodeInterpreterResult extends Shape
{
    /**
     * @param array{
     *     content: list<ContentBlock>,
     *     structuredContent?: ToolResultStructuredContent|null,
     *     isError?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
