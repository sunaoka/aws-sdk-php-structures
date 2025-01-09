<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\ErrorDetails $errorDetails
 * @property string $jobId
 * @property Shapes\IdMappingJobMetrics $metrics
 * @property list<Shapes\IdMappingJobOutputSource> $outputSourceConfig
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 */
class GetIdMappingJobResponse extends Response
{
}
