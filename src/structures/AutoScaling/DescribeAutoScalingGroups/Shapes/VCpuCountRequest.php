<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Min
 * @property int<0, max>|null $Max
 */
class VCpuCountRequest extends Shape
{
    /**
     * @param array{
     *     Min: int<0, max>,
     *     Max?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
