<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LlmAsAJudgeEvaluatorConfig|null $llmAsAJudge
 * @property CodeBasedEvaluatorConfig|null $codeBased
 * @property DerivedEvaluatorConfig|null $derived
 */
class EvaluatorConfig extends Shape
{
    /**
     * @param array{
     *     llmAsAJudge?: LlmAsAJudgeEvaluatorConfig|null,
     *     codeBased?: CodeBasedEvaluatorConfig|null,
     *     derived?: DerivedEvaluatorConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
