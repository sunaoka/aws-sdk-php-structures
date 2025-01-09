<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobName
 * @property string $datasetExportJobArn
 * @property string $datasetArn
 * @property 'BULK'|'PUT'|'ALL' $ingestionMode
 * @property string $roleArn
 * @property string $status
 * @property DatasetExportJobOutput $jobOutput
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 */
class DatasetExportJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string,
     *     datasetExportJobArn?: string,
     *     datasetArn?: string,
     *     ingestionMode?: 'BULK'|'PUT'|'ALL',
     *     roleArn?: string,
     *     status?: string,
     *     jobOutput?: DatasetExportJobOutput,
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
