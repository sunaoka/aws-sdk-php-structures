<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property string|null $signature
 */
class HarnessReasoningTextBlock extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     signature?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
