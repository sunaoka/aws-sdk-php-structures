<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $DeviceName
 * @property string|null $Format
 * @property string|null $SnapshotId
 * @property string|null $Url
 * @property UserBucket|null $UserBucket
 */
class ImageDiskContainer extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DeviceName?: string|null,
     *     Format?: string|null,
     *     SnapshotId?: string|null,
     *     Url?: string|null,
     *     UserBucket?: UserBucket|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
