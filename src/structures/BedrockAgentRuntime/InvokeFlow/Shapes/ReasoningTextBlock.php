<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $signature
 * @property string $text
 */
class ReasoningTextBlock extends Shape
{
    /**
     * @param array{
     *     signature?: string|null,
     *     text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
