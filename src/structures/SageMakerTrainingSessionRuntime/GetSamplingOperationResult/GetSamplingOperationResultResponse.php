<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Skipped' $status
 * @property Shapes\SampleOperationResult|null $operationResult
 * @property string|null $errorDetails
 */
class GetSamplingOperationResultResponse extends Response
{
}
