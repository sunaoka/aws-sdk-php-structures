<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Uid
 * @property int $Gid
 * @property list<int> $SecondaryGids
 */
class PosixProfile extends Shape
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
