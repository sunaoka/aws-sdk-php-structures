<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property Span|null $span
 */
class TextResponsePart extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     span?: Span|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
