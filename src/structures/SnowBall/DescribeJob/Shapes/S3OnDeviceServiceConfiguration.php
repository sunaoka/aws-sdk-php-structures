<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $StorageLimit
 * @property 'TB'|null $StorageUnit
 * @property int<3, 16>|null $ServiceSize
 * @property int<1, 4>|null $FaultTolerance
 */
class S3OnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageLimit?: double|null,
     *     StorageUnit?: 'TB'|null,
     *     ServiceSize?: int<3, 16>|null,
     *     FaultTolerance?: int<1, 4>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
