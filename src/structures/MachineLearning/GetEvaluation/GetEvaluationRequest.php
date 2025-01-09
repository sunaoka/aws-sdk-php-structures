<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EvaluationId
 */
class GetEvaluationRequest extends Request
{
    /**
     * @param array{EvaluationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
