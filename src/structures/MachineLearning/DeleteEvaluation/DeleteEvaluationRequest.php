<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EvaluationId
 */
class DeleteEvaluationRequest extends Request
{
    /**
     * @param array{EvaluationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
