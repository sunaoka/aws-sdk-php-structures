<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\OptimizePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OptimizedPrompt|null $optimizedPrompt
 */
class OptimizedPromptEvent extends Shape
{
    /**
     * @param array{optimizedPrompt?: OptimizedPrompt|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
