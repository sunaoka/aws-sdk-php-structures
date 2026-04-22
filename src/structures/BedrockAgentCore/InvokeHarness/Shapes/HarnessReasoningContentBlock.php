<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessReasoningTextBlock|null $reasoningText
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $redactedContent
 */
class HarnessReasoningContentBlock extends Shape
{
    /**
     * @param array{
     *     reasoningText?: HarnessReasoningTextBlock|null,
     *     redactedContent?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
