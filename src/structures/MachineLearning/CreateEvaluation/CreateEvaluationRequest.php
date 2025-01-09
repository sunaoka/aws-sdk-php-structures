<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EvaluationId
 * @property string $EvaluationName
 * @property string $MLModelId
 * @property string $EvaluationDataSourceId
 */
class CreateEvaluationRequest extends Request
{
    /**
     * @param array{
     *     EvaluationId: string,
     *     EvaluationName?: string,
     *     MLModelId: string,
     *     EvaluationDataSourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
