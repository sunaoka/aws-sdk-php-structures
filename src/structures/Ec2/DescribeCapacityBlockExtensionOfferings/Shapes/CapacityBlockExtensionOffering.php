<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityBlockExtensionOfferingId
 * @property string $InstanceType
 * @property int $InstanceCount
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $CapacityBlockExtensionStartDate
 * @property \Aws\Api\DateTimeResult $CapacityBlockExtensionEndDate
 * @property int $CapacityBlockExtensionDurationHours
 * @property string $UpfrontFee
 * @property string $CurrencyCode
 * @property 'default'|'dedicated' $Tenancy
 */
class CapacityBlockExtensionOffering extends Shape
{
    /**
     * @param array{
     *     CapacityBlockExtensionOfferingId?: string,
     *     InstanceType?: string,
     *     InstanceCount?: int,
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     CapacityBlockExtensionStartDate?: \Aws\Api\DateTimeResult,
     *     CapacityBlockExtensionEndDate?: \Aws\Api\DateTimeResult,
     *     CapacityBlockExtensionDurationHours?: int,
     *     UpfrontFee?: string,
     *     CurrencyCode?: string,
     *     Tenancy?: 'default'|'dedicated'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
