<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextInferenceConfig $textInferenceConfig
 */
class InferenceConfig extends Shape
{
    /**
     * @param array{textInferenceConfig?: TextInferenceConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
