<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdMappingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     status: 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED',
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
