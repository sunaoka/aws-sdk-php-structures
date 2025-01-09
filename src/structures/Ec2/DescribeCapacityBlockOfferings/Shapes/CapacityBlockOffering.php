<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityBlockOfferingId
 * @property string $InstanceType
 * @property string $AvailabilityZone
 * @property int $InstanceCount
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property int $CapacityBlockDurationHours
 * @property string $UpfrontFee
 * @property string $CurrencyCode
 * @property 'default'|'dedicated' $Tenancy
 * @property int $CapacityBlockDurationMinutes
 */
class CapacityBlockOffering extends Shape
{
    /**
     * @param array{
     *     CapacityBlockOfferingId?: string,
     *     InstanceType?: string,
     *     AvailabilityZone?: string,
     *     InstanceCount?: int,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     CapacityBlockDurationHours?: int,
     *     UpfrontFee?: string,
     *     CurrencyCode?: string,
     *     Tenancy?: 'default'|'dedicated',
     *     CapacityBlockDurationMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
