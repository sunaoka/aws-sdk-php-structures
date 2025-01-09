<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlockExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationId
 * @property string $InstanceType
 * @property int $InstanceCount
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property string $CapacityBlockExtensionOfferingId
 * @property int $CapacityBlockExtensionDurationHours
 * @property 'payment-pending'|'payment-failed'|'payment-succeeded' $CapacityBlockExtensionStatus
 * @property \Aws\Api\DateTimeResult $CapacityBlockExtensionPurchaseDate
 * @property \Aws\Api\DateTimeResult $CapacityBlockExtensionStartDate
 * @property \Aws\Api\DateTimeResult $CapacityBlockExtensionEndDate
 * @property string $UpfrontFee
 * @property string $CurrencyCode
 */
class CapacityBlockExtension extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string,
     *     InstanceType?: string,
     *     InstanceCount?: int,
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string,
     *     CapacityBlockExtensionOfferingId?: string,
     *     CapacityBlockExtensionDurationHours?: int,
     *     CapacityBlockExtensionStatus?: 'payment-pending'|'payment-failed'|'payment-succeeded',
     *     CapacityBlockExtensionPurchaseDate?: \Aws\Api\DateTimeResult,
     *     CapacityBlockExtensionStartDate?: \Aws\Api\DateTimeResult,
     *     CapacityBlockExtensionEndDate?: \Aws\Api\DateTimeResult,
     *     UpfrontFee?: string,
     *     CurrencyCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
