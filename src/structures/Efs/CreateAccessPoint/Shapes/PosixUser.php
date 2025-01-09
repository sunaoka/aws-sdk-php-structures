<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Uid
 * @property int $Gid
 * @property list<int> $SecondaryGids
 */
class PosixUser extends Shape
{
    /**
     * @param array{
     *     Uid: int,
     *     Gid: int,
     *     SecondaryGids?: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
