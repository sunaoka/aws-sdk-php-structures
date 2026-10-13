<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainingSessionName
 * @property int<1, max> $sequenceNumber
 * @property string|null $clientToken
 * @property Shapes\OperationConfig $operationConfig
 */
class ExecuteTrainingOperationRequest extends Request
{
    /**
     * @param array{
     *     trainingSessionName: string,
     *     sequenceNumber: int<1, max>,
     *     clientToken?: string|null,
     *     operationConfig: Shapes\OperationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
