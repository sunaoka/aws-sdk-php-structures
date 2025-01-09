<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $available
 * @property string $name
 * @property int $total
 * @property string $unit
 * @property int $used
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     available?: int,
     *     name?: string,
     *     total?: int,
     *     unit?: string,
     *     used?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
