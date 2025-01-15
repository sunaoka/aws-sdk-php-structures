<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobName
 * @property string|null $datasetImportJobArn
 * @property string|null $datasetArn
 * @property DataSource|null $dataSource
 * @property string|null $roleArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 * @property 'FULL'|'INCREMENTAL'|null $importMode
 * @property bool|null $publishAttributionMetricsToS3
 */
class DatasetImportJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string|null,
     *     datasetImportJobArn?: string|null,
     *     datasetArn?: string|null,
     *     dataSource?: DataSource|null,
     *     roleArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null,
     *     importMode?: 'FULL'|'INCREMENTAL'|null,
     *     publishAttributionMetricsToS3?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
