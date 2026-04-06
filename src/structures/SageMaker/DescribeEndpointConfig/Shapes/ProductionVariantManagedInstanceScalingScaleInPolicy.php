<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IDLE_RELEASE'|'CONSOLIDATION' $Strategy
 * @property int<1, 100>|null $MaximumStepSize
 * @property int<5, 1440>|null $CooldownInMinutes
 */
class ProductionVariantManagedInstanceScalingScaleInPolicy extends Shape
{
    /**
     * @param array{
     *     Strategy: 'IDLE_RELEASE'|'CONSOLIDATION',
     *     MaximumStepSize?: int<1, 100>|null,
     *     CooldownInMinutes?: int<5, 1440>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
