<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityBlockExtensionOfferingId
 * @property string|null $InstanceType
 * @property int|null $InstanceCount
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $CapacityBlockExtensionStartDate
 * @property \Aws\Api\DateTimeResult|null $CapacityBlockExtensionEndDate
 * @property int|null $CapacityBlockExtensionDurationHours
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 * @property 'default'|'dedicated'|null $Tenancy
 * @property string|null $ZoneType
 */
class CapacityBlockExtensionOffering extends Shape
{
    /**
     * @param array{
     *     CapacityBlockExtensionOfferingId?: string|null,
     *     InstanceType?: string|null,
     *     InstanceCount?: int|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     CapacityBlockExtensionStartDate?: \Aws\Api\DateTimeResult|null,
     *     CapacityBlockExtensionEndDate?: \Aws\Api\DateTimeResult|null,
     *     CapacityBlockExtensionDurationHours?: int|null,
     *     UpfrontFee?: string|null,
     *     CurrencyCode?: string|null,
     *     Tenancy?: 'default'|'dedicated'|null,
     *     ZoneType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
