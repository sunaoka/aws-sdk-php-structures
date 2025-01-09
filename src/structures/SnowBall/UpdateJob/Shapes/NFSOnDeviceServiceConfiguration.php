<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $StorageLimit
 * @property 'TB' $StorageUnit
 */
class NFSOnDeviceServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageLimit?: int<0, max>,
     *     StorageUnit?: 'TB'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
