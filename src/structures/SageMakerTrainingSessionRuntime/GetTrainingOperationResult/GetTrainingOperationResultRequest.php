<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainingSessionName
 * @property string $operationId
 */
class GetTrainingOperationResultRequest extends Request
{
    /**
     * @param array{
     *     trainingSessionName: string,
     *     operationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
