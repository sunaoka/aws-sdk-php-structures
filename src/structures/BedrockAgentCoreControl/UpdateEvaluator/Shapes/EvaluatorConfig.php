<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LlmAsAJudgeEvaluatorConfig|null $llmAsAJudge
 */
class EvaluatorConfig extends Shape
{
    /**
     * @param array{llmAsAJudge?: LlmAsAJudgeEvaluatorConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
