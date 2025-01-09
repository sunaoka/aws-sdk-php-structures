<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportSnapshotTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property double $DiskImageSize
 * @property bool $Encrypted
 * @property string $Format
 * @property string $KmsKeyId
 * @property string $Progress
 * @property string $SnapshotId
 * @property string $Status
 * @property string $StatusMessage
 * @property string $Url
 * @property UserBucketDetails $UserBucket
 */
class SnapshotTaskDetail extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     DiskImageSize?: double,
     *     Encrypted?: bool,
     *     Format?: string,
     *     KmsKeyId?: string,
     *     Progress?: string,
     *     SnapshotId?: string,
     *     Status?: string,
     *     StatusMessage?: string,
     *     Url?: string,
     *     UserBucket?: UserBucketDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
