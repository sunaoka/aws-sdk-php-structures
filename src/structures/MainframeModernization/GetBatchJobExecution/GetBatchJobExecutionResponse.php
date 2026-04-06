<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetBatchJobExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property Shapes\BatchJobIdentifier|null $batchJobIdentifier
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $executionId
 * @property string|null $jobId
 * @property string|null $jobName
 * @property Shapes\JobStepRestartMarker|null $jobStepRestartMarker
 * @property 'VSE'|'JES2'|'JES3'|null $jobType
 * @property string|null $jobUser
 * @property string|null $returnCode
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning' $status
 * @property string|null $statusReason
 */
class GetBatchJobExecutionResponse extends Response
{
}
