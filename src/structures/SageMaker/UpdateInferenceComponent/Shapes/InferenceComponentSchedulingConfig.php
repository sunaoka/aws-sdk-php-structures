<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SPREAD'|'BINPACK' $PlacementStrategy
 * @property InferenceComponentAvailabilityZoneBalance|null $AvailabilityZoneBalance
 */
class InferenceComponentSchedulingConfig extends Shape
{
    /**
     * @param array{
     *     PlacementStrategy: 'SPREAD'|'BINPACK',
     *     AvailabilityZoneBalance?: InferenceComponentAvailabilityZoneBalance|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
