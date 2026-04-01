<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PERMISSIVE' $EnforcementMode
 * @property int<0, 100>|null $MaxImbalance
 */
class InferenceComponentAvailabilityZoneBalance extends Shape
{
    /**
     * @param array{
     *     EnforcementMode: 'PERMISSIVE',
     *     MaxImbalance?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
