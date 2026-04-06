<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\ErrorDetails|null $errorDetails
 * @property string $jobId
 * @property Shapes\IdMappingJobMetrics|null $metrics
 * @property list<Shapes\IdMappingJobOutputSource>|null $outputSourceConfig
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 */
class GetIdMappingJobResponse extends Response
{
}
