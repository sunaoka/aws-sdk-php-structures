<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Min
 * @property int<0, max> $Max
 */
class MemoryMiBRequest extends Shape
{
    /**
     * @param array{
     *     Min: int<0, max>,
     *     Max?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
