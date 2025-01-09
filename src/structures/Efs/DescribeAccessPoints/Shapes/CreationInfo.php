<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $OwnerUid
 * @property int<0, 4294967295> $OwnerGid
 * @property string $Permissions
 */
class CreationInfo extends Shape
{
    /**
     * @param array{
     *     OwnerUid: int<0, 4294967295>,
     *     OwnerGid: int<0, 4294967295>,
     *     Permissions: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
