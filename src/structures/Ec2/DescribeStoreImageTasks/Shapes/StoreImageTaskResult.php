<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStoreImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmiId
 * @property \Aws\Api\DateTimeResult $TaskStartTime
 * @property string $Bucket
 * @property string $S3objectKey
 * @property int $ProgressPercentage
 * @property string $StoreTaskState
 * @property string $StoreTaskFailureReason
 */
class StoreImageTaskResult extends Shape
{
    /**
     * @param array{
     *     AmiId?: string,
     *     TaskStartTime?: \Aws\Api\DateTimeResult,
     *     Bucket?: string,
     *     S3objectKey?: string,
     *     ProgressPercentage?: int,
     *     StoreTaskState?: string,
     *     StoreTaskFailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
