<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minInstanceCount
 * @property int $maxInstanceCount
 */
class ScalingConfigurationRequest extends Shape
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
