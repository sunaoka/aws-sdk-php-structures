<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property ToolUseBlockDelta|null $toolUse
 * @property ReasoningContentBlockDelta|null $reasoningContent
 */
class ContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     toolUse?: ToolUseBlockDelta|null,
     *     reasoningContent?: ReasoningContentBlockDelta|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
