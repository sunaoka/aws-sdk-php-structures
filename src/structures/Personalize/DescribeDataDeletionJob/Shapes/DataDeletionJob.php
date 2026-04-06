<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataDeletionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobName
 * @property string|null $dataDeletionJobArn
 * @property string|null $datasetGroupArn
 * @property DataSource|null $dataSource
 * @property string|null $roleArn
 * @property string|null $status
 * @property int|null $numDeleted
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 */
class DataDeletionJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string|null,
     *     dataDeletionJobArn?: string|null,
     *     datasetGroupArn?: string|null,
     *     dataSource?: DataSource|null,
     *     roleArn?: string|null,
     *     status?: string|null,
     *     numDeleted?: int|null,
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
