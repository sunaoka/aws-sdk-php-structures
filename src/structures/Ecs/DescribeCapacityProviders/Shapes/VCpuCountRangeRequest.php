<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $min
 * @property int|null $max
 */
class VCpuCountRangeRequest extends Shape
{
    /**
     * @param array{
     *     min: int,
     *     max?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
