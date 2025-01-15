<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $StorageLimit
 * @property 'TB'|null $StorageUnit
 */
class TGWOnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageLimit?: int<0, max>|null,
     *     StorageUnit?: 'TB'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
