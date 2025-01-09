<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $jobId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED' $status
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     jobId: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'RUNNING'|'SUCCEEDED'|'FAILED'|'QUEUED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
