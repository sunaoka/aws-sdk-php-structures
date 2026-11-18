<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property int|null $InstanceCount
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property int|null $CapacityBlockDurationHours
 * @property int|null $CapacityBlockDurationMinutes
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 * @property string|null $ZoneType
 */
class CapacityBlockOfferingSegment extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     InstanceCount?: int|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     CapacityBlockDurationHours?: int|null,
     *     CapacityBlockDurationMinutes?: int|null,
     *     UpfrontFee?: string|null,
     *     CurrencyCode?: string|null,
     *     ZoneType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
