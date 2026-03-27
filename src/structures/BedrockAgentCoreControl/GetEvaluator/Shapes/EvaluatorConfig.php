<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LlmAsAJudgeEvaluatorConfig|null $llmAsAJudge
 * @property CodeBasedEvaluatorConfig|null $codeBased
 */
class EvaluatorConfig extends Shape
{
    /**
     * @param array{
     *     llmAsAJudge?: LlmAsAJudgeEvaluatorConfig|null,
     *     codeBased?: CodeBasedEvaluatorConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
