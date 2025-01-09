<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Span $span
 * @property string $text
 */
class TextResponsePart extends Shape
{
    /**
     * @param array{
     *     span?: Span,
     *     text?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
