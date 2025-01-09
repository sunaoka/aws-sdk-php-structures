<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $DeviceName
 * @property double $DiskImageSize
 * @property string $Format
 * @property string $Progress
 * @property string $SnapshotId
 * @property string $Status
 * @property string $StatusMessage
 * @property string $Url
 * @property UserBucketDetails $UserBucket
 */
class SnapshotDetail extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     DeviceName?: string,
     *     DiskImageSize?: double,
     *     Format?: string,
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
