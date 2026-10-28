<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $memory
 * @property int<1, 100>|null $maxComputePercent
 */
class NvidiaMpsAllocation extends Shape
{
    /**
     * @param array{
     *     memory: int<1, max>,
     *     maxComputePercent?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
