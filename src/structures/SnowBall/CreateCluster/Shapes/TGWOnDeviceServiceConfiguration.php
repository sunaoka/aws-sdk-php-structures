<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StorageLimit
 * @property 'TB' $StorageUnit
 */
class TGWOnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageLimit?: int,
     *     StorageUnit?: 'TB'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
