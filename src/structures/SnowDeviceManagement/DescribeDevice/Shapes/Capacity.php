<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $available
 * @property string|null $name
 * @property int|null $total
 * @property string|null $unit
 * @property int|null $used
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     available?: int|null,
     *     name?: string|null,
     *     total?: int|null,
     *     unit?: string|null,
     *     used?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
