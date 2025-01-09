<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minInstanceCount
 * @property int $maxInstanceCount
 */
class ScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     minInstanceCount: int,
     *     maxInstanceCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
