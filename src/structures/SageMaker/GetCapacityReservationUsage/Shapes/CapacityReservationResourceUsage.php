<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetCapacityReservationUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HyperPodClusters'|'Endpoints' $ResourceType
 * @property int<0, max> $InUseInstanceCount
 */
class CapacityReservationResourceUsage extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'HyperPodClusters'|'Endpoints',
     *     InUseInstanceCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
