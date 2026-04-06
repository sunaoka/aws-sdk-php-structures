<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property int<0, 9999> $Count
 */
class InstanceTypeCapacity extends Shape
{
    /**
     * @param array{
     *     InstanceType: string,
     *     Count: int<0, 9999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
