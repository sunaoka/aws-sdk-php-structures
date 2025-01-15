<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $DeviceName
 * @property double|null $DiskImageSize
 * @property string|null $Format
 * @property string|null $Progress
 * @property string|null $SnapshotId
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property string|null $Url
 * @property UserBucketDetails|null $UserBucket
 */
class SnapshotDetail extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DeviceName?: string|null,
     *     DiskImageSize?: double|null,
     *     Format?: string|null,
     *     Progress?: string|null,
     *     SnapshotId?: string|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     Url?: string|null,
     *     UserBucket?: UserBucketDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
