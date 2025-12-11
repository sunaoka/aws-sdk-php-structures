<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockEvaluatorModelConfig|null $bedrockEvaluatorModelConfig
 */
class EvaluatorModelConfig extends Shape
{
    /**
     * @param array{bedrockEvaluatorModelConfig?: BedrockEvaluatorModelConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
