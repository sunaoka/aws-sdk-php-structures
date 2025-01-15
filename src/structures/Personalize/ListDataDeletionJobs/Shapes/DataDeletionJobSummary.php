<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDataDeletionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataDeletionJobArn
 * @property string|null $datasetGroupArn
 * @property string|null $jobName
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 */
class DataDeletionJobSummary extends Shape
{
    /**
     * @param array{
     *     dataDeletionJobArn?: string|null,
     *     datasetGroupArn?: string|null,
     *     jobName?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
