<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property double|null $DiskImageSize
 * @property bool|null $Encrypted
 * @property string|null $Format
 * @property string|null $KmsKeyId
 * @property string|null $Progress
 * @property string|null $SnapshotId
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property string|null $Url
 * @property UserBucketDetails|null $UserBucket
 */
class SnapshotTaskDetail extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DiskImageSize?: double|null,
     *     Encrypted?: bool|null,
     *     Format?: string|null,
     *     KmsKeyId?: string|null,
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
