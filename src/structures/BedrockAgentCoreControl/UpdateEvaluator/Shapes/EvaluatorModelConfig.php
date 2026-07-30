<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockEvaluatorModelConfig|null $bedrockEvaluatorModelConfig
 * @property OpenResponsesEvaluatorModelConfig|null $responsesEvaluatorModelConfig
 */
class EvaluatorModelConfig extends Shape
{
    /**
     * @param array{
     *     bedrockEvaluatorModelConfig?: BedrockEvaluatorModelConfig|null,
     *     responsesEvaluatorModelConfig?: OpenResponsesEvaluatorModelConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
