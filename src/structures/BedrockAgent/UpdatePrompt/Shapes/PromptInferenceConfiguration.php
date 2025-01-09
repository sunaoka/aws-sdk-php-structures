<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptModelInferenceConfiguration $text
 */
class PromptInferenceConfiguration extends Shape
{
    /**
     * @param array{text?: PromptModelInferenceConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
