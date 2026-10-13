<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Skipped' $status
 * @property Shapes\OperationResult|null $operationResult
 * @property string|null $errorDetails
 * @property Shapes\TrainingTokenUsage|null $tokenUsage
 */
class GetTrainingOperationResultResponse extends Response
{
}
