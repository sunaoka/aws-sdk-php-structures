<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetBatchJobExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property Shapes\BatchJobIdentifier $batchJobIdentifier
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $executionId
 * @property string $jobId
 * @property string $jobName
 * @property Shapes\JobStepRestartMarker $jobStepRestartMarker
 * @property 'VSE'|'JES2'|'JES3' $jobType
 * @property string $jobUser
 * @property string $returnCode
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning' $status
 * @property string $statusReason
 */
class GetBatchJobExecutionResponse extends Response
{
}
