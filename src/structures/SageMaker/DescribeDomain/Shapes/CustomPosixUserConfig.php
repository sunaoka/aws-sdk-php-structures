<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10000, 4000000> $Uid
 * @property int<1001, 4000000> $Gid
 */
class CustomPosixUserConfig extends Shape
{
    /**
     * @param array{
     *     Uid: int<10000, 4000000>,
     *     Gid: int<1001, 4000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
