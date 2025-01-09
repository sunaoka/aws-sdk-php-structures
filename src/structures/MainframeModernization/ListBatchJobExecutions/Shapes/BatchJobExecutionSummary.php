<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property BatchJobIdentifier $batchJobIdentifier
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $executionId
 * @property string $jobId
 * @property string $jobName
 * @property 'VSE'|'JES2'|'JES3' $jobType
 * @property string $returnCode
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning' $status
 */
class BatchJobExecutionSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     batchJobIdentifier?: BatchJobIdentifier,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     executionId: string,
     *     jobId?: string,
     *     jobName?: string,
     *     jobType?: 'VSE'|'JES2'|'JES3',
     *     returnCode?: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'Submitting'|'Holding'|'Dispatching'|'Running'|'Cancelling'|'Cancelled'|'Succeeded'|'Failed'|'Purged'|'Succeeded With Warning'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
