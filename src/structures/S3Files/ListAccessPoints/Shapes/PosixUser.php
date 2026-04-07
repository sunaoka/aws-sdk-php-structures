<?php

namespace Sunaoka\Aws\Structures\S3Files\ListAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $uid
 * @property int<0, 4294967295> $gid
 * @property list<int<0, 4294967295>>|null $secondaryGids
 */
class PosixUser extends Shape
{
    /**
     * @param array{
     *     uid: int<0, 4294967295>,
     *     gid: int<0, 4294967295>,
     *     secondaryGids?: list<int<0, 4294967295>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
