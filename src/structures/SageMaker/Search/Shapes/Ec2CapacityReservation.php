<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ec2CapacityReservationId
 * @property int<0, max>|null $TotalInstanceCount
 * @property int<0, max>|null $AvailableInstanceCount
 * @property int<0, max>|null $UsedByCurrentEndpoint
 */
class Ec2CapacityReservation extends Shape
{
    /**
     * @param array{
     *     Ec2CapacityReservationId?: string|null,
     *     TotalInstanceCount?: int<0, max>|null,
     *     AvailableInstanceCount?: int<0, max>|null,
     *     UsedByCurrentEndpoint?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
