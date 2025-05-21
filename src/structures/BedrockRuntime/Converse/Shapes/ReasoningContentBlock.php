<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReasoningTextBlock|null $reasoningText
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $redactedContent
 */
class ReasoningContentBlock extends Shape
{
    /**
     * @param array{
     *     reasoningText?: ReasoningTextBlock|null,
     *     redactedContent?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
