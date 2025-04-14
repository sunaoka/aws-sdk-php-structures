<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\IdMappingJobMetrics|null $metrics
 * @property Shapes\ErrorDetails|null $errorDetails
 * @property list<Shapes\IdMappingJobOutputSource>|null $outputSourceConfig
 */
class GetIdMappingJobResponse extends Response
{
}
