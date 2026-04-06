<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instructions
 * @property RatingScale $ratingScale
 * @property EvaluatorModelConfig $modelConfig
 */
class LlmAsAJudgeEvaluatorConfig extends Shape
{
    /**
     * @param array{
     *     instructions: string,
     *     ratingScale: RatingScale,
     *     modelConfig: EvaluatorModelConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
