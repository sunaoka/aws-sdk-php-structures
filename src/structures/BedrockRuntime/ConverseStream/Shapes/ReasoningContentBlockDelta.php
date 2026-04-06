<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $redactedContent
 * @property string|null $signature
 */
class ReasoningContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     redactedContent?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     signature?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
