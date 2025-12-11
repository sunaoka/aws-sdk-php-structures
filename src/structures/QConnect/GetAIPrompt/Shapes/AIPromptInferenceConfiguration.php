<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextAIPromptInferenceConfiguration|null $textAIPromptInferenceConfiguration
 */
class AIPromptInferenceConfiguration extends Shape
{
    /**
     * @param array{textAIPromptInferenceConfiguration?: TextAIPromptInferenceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
