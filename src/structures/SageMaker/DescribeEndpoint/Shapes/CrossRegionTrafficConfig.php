<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $MaxInvocationsPerSecondPerInstance
 * @property int<1, 100> $MaxCrossRegionPercentPerEndpoint
 */
class CrossRegionTrafficConfig extends Shape
{
    /**
     * @param array{
     *     MaxInvocationsPerSecondPerInstance: int<1, 10000>,
     *     MaxCrossRegionPercentPerEndpoint: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
