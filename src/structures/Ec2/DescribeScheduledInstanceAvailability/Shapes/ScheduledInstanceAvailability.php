<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstanceAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property int $AvailableInstanceCount
 * @property \Aws\Api\DateTimeResult $FirstSlotStartTime
 * @property string $HourlyPrice
 * @property string $InstanceType
 * @property int $MaxTermDurationInDays
 * @property int $MinTermDurationInDays
 * @property string $NetworkPlatform
 * @property string $Platform
 * @property string $PurchaseToken
 * @property ScheduledInstanceRecurrence $Recurrence
 * @property int $SlotDurationInHours
 * @property int $TotalScheduledInstanceHours
 */
class ScheduledInstanceAvailability extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     AvailableInstanceCount?: int,
     *     FirstSlotStartTime?: \Aws\Api\DateTimeResult,
     *     HourlyPrice?: string,
     *     InstanceType?: string,
     *     MaxTermDurationInDays?: int,
     *     MinTermDurationInDays?: int,
     *     NetworkPlatform?: string,
     *     Platform?: string,
     *     PurchaseToken?: string,
     *     Recurrence?: ScheduledInstanceRecurrence,
     *     SlotDurationInHours?: int,
     *     TotalScheduledInstanceHours?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
