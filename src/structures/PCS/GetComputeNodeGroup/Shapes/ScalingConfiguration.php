<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $minInstanceCount
 * @property int<0, max> $maxInstanceCount
 */
class ScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     minInstanceCount: int<0, max>,
     *     maxInstanceCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
