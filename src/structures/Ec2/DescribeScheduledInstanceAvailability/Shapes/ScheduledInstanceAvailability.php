<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstanceAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property int|null $AvailableInstanceCount
 * @property \Aws\Api\DateTimeResult|null $FirstSlotStartTime
 * @property string|null $HourlyPrice
 * @property string|null $InstanceType
 * @property int|null $MaxTermDurationInDays
 * @property int|null $MinTermDurationInDays
 * @property string|null $NetworkPlatform
 * @property string|null $Platform
 * @property string|null $PurchaseToken
 * @property ScheduledInstanceRecurrence|null $Recurrence
 * @property int|null $SlotDurationInHours
 * @property int|null $TotalScheduledInstanceHours
 */
class ScheduledInstanceAvailability extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailableInstanceCount?: int|null,
     *     FirstSlotStartTime?: \Aws\Api\DateTimeResult|null,
     *     HourlyPrice?: string|null,
     *     InstanceType?: string|null,
     *     MaxTermDurationInDays?: int|null,
     *     MinTermDurationInDays?: int|null,
     *     NetworkPlatform?: string|null,
     *     Platform?: string|null,
     *     PurchaseToken?: string|null,
     *     Recurrence?: ScheduledInstanceRecurrence|null,
     *     SlotDurationInHours?: int|null,
     *     TotalScheduledInstanceHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
