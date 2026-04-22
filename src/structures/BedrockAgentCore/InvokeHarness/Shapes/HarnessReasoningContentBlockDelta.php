<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property \Psr\Http\Message\StreamInterface|null $redactedContent
 * @property string|null $signature
 */
class HarnessReasoningContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     redactedContent?: \Psr\Http\Message\StreamInterface|null,
     *     signature?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
