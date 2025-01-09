<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationId
 */
class DeleteContactEvaluationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
