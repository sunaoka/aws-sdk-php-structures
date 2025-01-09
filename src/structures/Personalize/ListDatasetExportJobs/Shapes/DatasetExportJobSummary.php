<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetExportJobArn
 * @property string $jobName
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 */
class DatasetExportJobSummary extends Shape
{
    /**
     * @param array{
     *     datasetExportJobArn?: string,
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
