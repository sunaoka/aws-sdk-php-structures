<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainingSessionName
 * @property Shapes\SampleOperationConfig $operationConfig
 */
class ExecuteSamplingOperationRequest extends Request
{
    /**
     * @param array{
     *     trainingSessionName: string,
     *     operationConfig: Shapes\SampleOperationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
