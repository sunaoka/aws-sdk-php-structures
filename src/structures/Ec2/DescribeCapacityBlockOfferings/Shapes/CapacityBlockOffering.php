<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityBlockOfferingId
 * @property string|null $InstanceType
 * @property string|null $AvailabilityZone
 * @property int|null $InstanceCount
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property int|null $CapacityBlockDurationHours
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 * @property 'default'|'dedicated'|null $Tenancy
 * @property int|null $CapacityBlockDurationMinutes
 */
class CapacityBlockOffering extends Shape
{
    /**
     * @param array{
     *     CapacityBlockOfferingId?: string|null,
     *     InstanceType?: string|null,
     *     AvailabilityZone?: string|null,
     *     InstanceCount?: int|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     CapacityBlockDurationHours?: int|null,
     *     UpfrontFee?: string|null,
     *     CurrencyCode?: string|null,
     *     Tenancy?: 'default'|'dedicated'|null,
     *     CapacityBlockDurationMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
