<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlockExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationId
 * @property string|null $InstanceType
 * @property int|null $InstanceCount
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property string|null $CapacityBlockExtensionOfferingId
 * @property int|null $CapacityBlockExtensionDurationHours
 * @property 'payment-pending'|'payment-failed'|'payment-succeeded'|null $CapacityBlockExtensionStatus
 * @property \Aws\Api\DateTimeResult|null $CapacityBlockExtensionPurchaseDate
 * @property \Aws\Api\DateTimeResult|null $CapacityBlockExtensionStartDate
 * @property \Aws\Api\DateTimeResult|null $CapacityBlockExtensionEndDate
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 */
class CapacityBlockExtension extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string|null,
     *     InstanceType?: string|null,
     *     InstanceCount?: int|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     CapacityBlockExtensionOfferingId?: string|null,
     *     CapacityBlockExtensionDurationHours?: int|null,
     *     CapacityBlockExtensionStatus?: 'payment-pending'|'payment-failed'|'payment-succeeded'|null,
     *     CapacityBlockExtensionPurchaseDate?: \Aws\Api\DateTimeResult|null,
     *     CapacityBlockExtensionStartDate?: \Aws\Api\DateTimeResult|null,
     *     CapacityBlockExtensionEndDate?: \Aws\Api\DateTimeResult|null,
     *     UpfrontFee?: string|null,
     *     CurrencyCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
