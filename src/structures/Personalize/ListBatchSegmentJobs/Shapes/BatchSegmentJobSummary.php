<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchSegmentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchSegmentJobArn
 * @property string $jobName
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 * @property string $solutionVersionArn
 */
class BatchSegmentJobSummary extends Shape
{
    /**
     * @param array{
     *     batchSegmentJobArn?: string,
     *     jobName?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string,
     *     solutionVersionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
