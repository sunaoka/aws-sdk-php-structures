<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobName
 * @property string|null $datasetExportJobArn
 * @property string|null $datasetArn
 * @property 'BULK'|'PUT'|'ALL'|null $ingestionMode
 * @property string|null $roleArn
 * @property string|null $status
 * @property DatasetExportJobOutput|null $jobOutput
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 */
class DatasetExportJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string|null,
     *     datasetExportJobArn?: string|null,
     *     datasetArn?: string|null,
     *     ingestionMode?: 'BULK'|'PUT'|'ALL'|null,
     *     roleArn?: string|null,
     *     status?: string|null,
     *     jobOutput?: DatasetExportJobOutput|null,
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
