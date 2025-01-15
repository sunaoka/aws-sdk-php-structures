<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStoreImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmiId
 * @property \Aws\Api\DateTimeResult|null $TaskStartTime
 * @property string|null $Bucket
 * @property string|null $S3objectKey
 * @property int|null $ProgressPercentage
 * @property string|null $StoreTaskState
 * @property string|null $StoreTaskFailureReason
 */
class StoreImageTaskResult extends Shape
{
    /**
     * @param array{
     *     AmiId?: string|null,
     *     TaskStartTime?: \Aws\Api\DateTimeResult|null,
     *     Bucket?: string|null,
     *     S3objectKey?: string|null,
     *     ProgressPercentage?: int|null,
     *     StoreTaskState?: string|null,
     *     StoreTaskFailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
