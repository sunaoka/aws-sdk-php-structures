<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Uid
 * @property int<0, 4294967295> $Gid
 * @property list<int<0, 4294967295>> $SecondaryGids
 */
class PosixUser extends Shape
{
    /**
     * @param array{
     *     Uid: int<0, 4294967295>,
     *     Gid: int<0, 4294967295>,
     *     SecondaryGids?: list<int<0, 4294967295>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
