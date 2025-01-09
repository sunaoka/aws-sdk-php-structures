<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $StorageLimit
 * @property 'TB' $StorageUnit
 * @property int<3, 16> $ServiceSize
 * @property int<1, 4> $FaultTolerance
 */
class S3OnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageLimit?: double,
     *     StorageUnit?: 'TB',
     *     ServiceSize?: int<3, 16>,
     *     FaultTolerance?: int<1, 4>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
