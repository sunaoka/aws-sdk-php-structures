<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $evaluatorId
 * @property Shapes\EvaluationInput $evaluationInput
 * @property Shapes\EvaluationTarget|null $evaluationTarget
 */
class EvaluateRequest extends Request
{
    /**
     * @param array{
     *     evaluatorId: string,
     *     evaluationInput: Shapes\EvaluationInput,
     *     evaluationTarget?: Shapes\EvaluationTarget|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
