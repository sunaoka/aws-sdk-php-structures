<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetImportJobArn
 * @property string $jobName
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 * @property 'FULL'|'INCREMENTAL' $importMode
 */
class DatasetImportJobSummary extends Shape
{
    /**
     * @param array{
     *     datasetImportJobArn?: string,
     *     jobName?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string,
     *     importMode?: 'FULL'|'INCREMENTAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
