<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataDeletionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobName
 * @property string $dataDeletionJobArn
 * @property string $datasetGroupArn
 * @property DataSource $dataSource
 * @property string $roleArn
 * @property string $status
 * @property int $numDeleted
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 */
class DataDeletionJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string,
     *     dataDeletionJobArn?: string,
     *     datasetGroupArn?: string,
     *     dataSource?: DataSource,
     *     roleArn?: string,
     *     status?: string,
     *     numDeleted?: int,
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
