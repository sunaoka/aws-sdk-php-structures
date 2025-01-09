<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EvaluationId
 * @property string $EvaluationName
 */
class UpdateEvaluationRequest extends Request
{
    /**
     * @param array{
     *     EvaluationId: string,
     *     EvaluationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
