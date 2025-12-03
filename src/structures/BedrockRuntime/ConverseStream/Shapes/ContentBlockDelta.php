<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property ToolUseBlockDelta|null $toolUse
 * @property list<ToolResultBlockDelta>|null $toolResult
 * @property ReasoningContentBlockDelta|null $reasoningContent
 * @property CitationsDelta|null $citation
 * @property ImageBlockDelta|null $image
 */
class ContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     toolUse?: ToolUseBlockDelta|null,
     *     toolResult?: list<ToolResultBlockDelta>|null,
     *     reasoningContent?: ReasoningContentBlockDelta|null,
     *     citation?: CitationsDelta|null,
     *     image?: ImageBlockDelta|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
