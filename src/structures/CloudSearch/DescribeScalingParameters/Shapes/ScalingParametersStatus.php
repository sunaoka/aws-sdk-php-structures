<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeScalingParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScalingParameters $Options
 * @property OptionStatus $Status
 */
class ScalingParametersStatus extends Shape
{
    /**
     * @param array{
     *     Options: ScalingParameters,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
