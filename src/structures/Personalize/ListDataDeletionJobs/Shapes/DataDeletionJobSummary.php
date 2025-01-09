<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDataDeletionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataDeletionJobArn
 * @property string $datasetGroupArn
 * @property string $jobName
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 */
class DataDeletionJobSummary extends Shape
{
    /**
     * @param array{
     *     dataDeletionJobArn?: string,
     *     datasetGroupArn?: string,
     *     jobName?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
