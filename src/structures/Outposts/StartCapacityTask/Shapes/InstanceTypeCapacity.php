<?php

namespace Sunaoka\Aws\Structures\Outposts\StartCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property int $Count
 */
class InstanceTypeCapacity extends Shape
{
    /**
     * @param array{
     *     InstanceType: string,
     *     Count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
