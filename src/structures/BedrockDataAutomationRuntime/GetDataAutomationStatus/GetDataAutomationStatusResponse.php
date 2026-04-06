<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\GetDataAutomationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Created'|'InProgress'|'Success'|'ServiceError'|'ClientError'|null $status
 * @property string|null $errorType
 * @property string|null $errorMessage
 * @property Shapes\OutputConfiguration|null $outputConfiguration
 * @property \Aws\Api\DateTimeResult|null $jobSubmissionTime
 * @property \Aws\Api\DateTimeResult|null $jobCompletionTime
 * @property int|null $jobDurationInSeconds
 */
class GetDataAutomationStatusResponse extends Response
{
}
