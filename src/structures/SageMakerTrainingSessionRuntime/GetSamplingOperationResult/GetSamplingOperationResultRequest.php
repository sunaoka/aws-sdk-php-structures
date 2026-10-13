<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainingSessionName
 * @property string $operationId
 */
class GetSamplingOperationResultRequest extends Request
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
