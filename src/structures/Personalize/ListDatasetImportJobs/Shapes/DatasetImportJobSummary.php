<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $datasetImportJobArn
 * @property string|null $jobName
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 * @property 'FULL'|'INCREMENTAL'|null $importMode
 */
class DatasetImportJobSummary extends Shape
{
    /**
     * @param array{
     *     datasetImportJobArn?: string|null,
     *     jobName?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null,
     *     importMode?: 'FULL'|'INCREMENTAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
