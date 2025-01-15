<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Format
 * @property string|null $Url
 * @property UserBucket|null $UserBucket
 */
class SnapshotDiskContainer extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Format?: string|null,
     *     Url?: string|null,
     *     UserBucket?: UserBucket|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
