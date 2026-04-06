<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\OptimizePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextPrompt|null $textPrompt
 */
class OptimizedPrompt extends Shape
{
    /**
     * @param array{textPrompt?: TextPrompt|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
