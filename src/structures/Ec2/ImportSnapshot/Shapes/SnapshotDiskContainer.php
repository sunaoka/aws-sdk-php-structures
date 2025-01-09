<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $Format
 * @property string $Url
 * @property UserBucket $UserBucket
 */
class SnapshotDiskContainer extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Format?: string,
     *     Url?: string,
     *     UserBucket?: UserBucket
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
