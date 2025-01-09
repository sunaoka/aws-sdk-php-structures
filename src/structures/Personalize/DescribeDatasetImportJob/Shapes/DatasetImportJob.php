<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobName
 * @property string $datasetImportJobArn
 * @property string $datasetArn
 * @property DataSource $dataSource
 * @property string $roleArn
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 * @property 'FULL'|'INCREMENTAL' $importMode
 * @property bool $publishAttributionMetricsToS3
 */
class DatasetImportJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string,
     *     datasetImportJobArn?: string,
     *     datasetArn?: string,
     *     dataSource?: DataSource,
     *     roleArn?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string,
     *     importMode?: 'FULL'|'INCREMENTAL',
     *     publishAttributionMetricsToS3?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
