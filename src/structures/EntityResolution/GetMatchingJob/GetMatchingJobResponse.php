<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\JobMetrics|null $metrics
 * @property Shapes\ErrorDetails|null $errorDetails
 * @property list<Shapes\JobOutputSource>|null $outputSourceConfig
 */
class GetMatchingJobResponse extends Response
{
}
