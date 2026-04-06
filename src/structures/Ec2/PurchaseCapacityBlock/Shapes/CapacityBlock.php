<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityBlockId
 * @property string|null $UltraserverType
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property list<string>|null $CapacityReservationIds
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property 'active'|'expired'|'unavailable'|'cancelled'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|null $State
 * @property list<Tag>|null $Tags
 */
class CapacityBlock extends Shape
{
    /**
     * @param array{
     *     CapacityBlockId?: string|null,
     *     UltraserverType?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     CapacityReservationIds?: list<string>|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     State?: 'active'|'expired'|'unavailable'|'cancelled'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
