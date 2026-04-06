<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptModelInferenceConfiguration|null $text
 */
class PromptInferenceConfiguration extends Shape
{
    /**
     * @param array{text?: PromptModelInferenceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
