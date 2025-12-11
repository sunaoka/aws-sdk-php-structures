<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMetricDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceRegion
 * @property string|null $AvailabilityZoneId
 * @property string|null $AccountId
 * @property string|null $InstanceFamily
 * @property string|null $InstanceType
 * @property string|null $InstancePlatform
 * @property string|null $ReservationArn
 * @property string|null $ReservationId
 * @property 'capacity-block'|'odcr'|null $ReservationType
 * @property \Aws\Api\DateTimeResult|null $ReservationCreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $ReservationStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $ReservationEndTimestamp
 * @property 'limited'|'unlimited'|null $ReservationEndDateType
 * @property 'default'|'dedicated'|null $Tenancy
 * @property 'active'|'expired'|'cancelled'|'scheduled'|'pending'|'failed'|'delayed'|'unsupported'|'payment-pending'|'payment-failed'|'retired'|null $ReservationState
 * @property string|null $ReservationInstanceMatchCriteria
 * @property string|null $ReservationUnusedFinancialOwner
 */
class CapacityManagerDimension extends Shape
{
    /**
     * @param array{
     *     ResourceRegion?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     AccountId?: string|null,
     *     InstanceFamily?: string|null,
     *     InstanceType?: string|null,
     *     InstancePlatform?: string|null,
     *     ReservationArn?: string|null,
     *     ReservationId?: string|null,
     *     ReservationType?: 'capacity-block'|'odcr'|null,
     *     ReservationCreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ReservationStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ReservationEndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ReservationEndDateType?: 'limited'|'unlimited'|null,
     *     Tenancy?: 'default'|'dedicated'|null,
     *     ReservationState?: 'active'|'expired'|'cancelled'|'scheduled'|'pending'|'failed'|'delayed'|'unsupported'|'payment-pending'|'payment-failed'|'retired'|null,
     *     ReservationInstanceMatchCriteria?: string|null,
     *     ReservationUnusedFinancialOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
