<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $StorageLimit
 * @property 'TB' $StorageUnit
 * @property int $ServiceSize
 * @property int $FaultTolerance
 */
class S3OnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageLimit?: double,
     *     StorageUnit?: 'TB',
     *     ServiceSize?: int,
     *     FaultTolerance?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
