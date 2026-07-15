<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $SubmitTime
 * @property string|null $JobName
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'CCDA'|'CSV'|null $SourceFormat
 */
class TransformationJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     JobStatus: 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     SubmitTime: \Aws\Api\DateTimeResult,
     *     JobName?: string|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     SourceFormat?: 'CCDA'|'CSV'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
