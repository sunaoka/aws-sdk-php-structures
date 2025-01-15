<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property BatchJobIdentifier|null $batchJobIdentifier
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $executionId
 * @property string|null $jobId
 * @property string|null $jobName
 * @property 'VSE'|'JES2'|'JES3'|null $jobType
 * @property string|null $returnCode
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning' $status
 */
class BatchJobExecutionSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     batchJobIdentifier?: BatchJobIdentifier|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     executionId: string,
     *     jobId?: string|null,
     *     jobName?: string|null,
     *     jobType?: 'VSE'|'JES2'|'JES3'|null,
     *     returnCode?: string|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
