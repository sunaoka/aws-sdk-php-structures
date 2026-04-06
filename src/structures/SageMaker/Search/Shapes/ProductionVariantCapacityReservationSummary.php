<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MlReservationArn
 * @property 'capacity-reservations-only'|null $CapacityReservationPreference
 * @property int<0, max>|null $TotalInstanceCount
 * @property int<0, max>|null $AvailableInstanceCount
 * @property int<0, max>|null $UsedByCurrentEndpoint
 * @property list<Ec2CapacityReservation>|null $Ec2CapacityReservations
 */
class ProductionVariantCapacityReservationSummary extends Shape
{
    /**
     * @param array{
     *     MlReservationArn?: string|null,
     *     CapacityReservationPreference?: 'capacity-reservations-only'|null,
     *     TotalInstanceCount?: int<0, max>|null,
     *     AvailableInstanceCount?: int<0, max>|null,
     *     UsedByCurrentEndpoint?: int<0, max>|null,
     *     Ec2CapacityReservations?: list<Ec2CapacityReservation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
