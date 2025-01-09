<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\ErrorDetails $errorDetails
 * @property string $jobId
 * @property Shapes\JobMetrics $metrics
 * @property list<Shapes\JobOutputSource> $outputSourceConfig
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 */
class GetMatchingJobResponse extends Response
{
}
