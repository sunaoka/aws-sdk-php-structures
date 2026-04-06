<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextInferenceConfig|null $textInferenceConfig
 */
class InferenceConfig extends Shape
{
    /**
     * @param array{textInferenceConfig?: TextInferenceConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
