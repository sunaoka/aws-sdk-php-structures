<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1200, 100800> $SizeInGiB
 * @property int<125, 1000> $PerUnitStorageThroughput
 */
class FSxLustreConfig extends Shape
{
    /**
     * @param array{
     *     SizeInGiB: int<1200, 100800>,
     *     PerUnitStorageThroughput: int<125, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
