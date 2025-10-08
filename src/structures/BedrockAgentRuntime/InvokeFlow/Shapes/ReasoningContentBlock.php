<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReasoningTextBlock|null $reasoningText
 * @property \Psr\Http\Message\StreamInterface|null $redactedContent
 */
class ReasoningContentBlock extends Shape
{
    /**
     * @param array{
     *     reasoningText?: ReasoningTextBlock|null,
     *     redactedContent?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
