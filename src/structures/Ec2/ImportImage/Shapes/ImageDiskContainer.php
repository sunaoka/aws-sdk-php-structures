<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $DeviceName
 * @property string $Format
 * @property string $SnapshotId
 * @property string $Url
 * @property UserBucket $UserBucket
 */
class ImageDiskContainer extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     DeviceName?: string,
     *     Format?: string,
     *     SnapshotId?: string,
     *     Url?: string,
     *     UserBucket?: UserBucket
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
