<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\ErrorDetails|null $errorDetails
 * @property string $jobId
 * @property Shapes\JobMetrics|null $metrics
 * @property list<Shapes\JobOutputSource>|null $outputSourceConfig
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 */
class GetMatchingJobResponse extends Response
{
}
