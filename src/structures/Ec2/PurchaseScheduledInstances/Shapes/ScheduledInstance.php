<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $HourlyPrice
 * @property int|null $InstanceCount
 * @property string|null $InstanceType
 * @property string|null $NetworkPlatform
 * @property \Aws\Api\DateTimeResult|null $NextSlotStartTime
 * @property string|null $Platform
 * @property \Aws\Api\DateTimeResult|null $PreviousSlotEndTime
 * @property ScheduledInstanceRecurrence|null $Recurrence
 * @property string|null $ScheduledInstanceId
 * @property int|null $SlotDurationInHours
 * @property \Aws\Api\DateTimeResult|null $TermEndDate
 * @property \Aws\Api\DateTimeResult|null $TermStartDate
 * @property int|null $TotalScheduledInstanceHours
 */
class ScheduledInstance extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     HourlyPrice?: string|null,
     *     InstanceCount?: int|null,
     *     InstanceType?: string|null,
     *     NetworkPlatform?: string|null,
     *     NextSlotStartTime?: \Aws\Api\DateTimeResult|null,
     *     Platform?: string|null,
     *     PreviousSlotEndTime?: \Aws\Api\DateTimeResult|null,
     *     Recurrence?: ScheduledInstanceRecurrence|null,
     *     ScheduledInstanceId?: string|null,
     *     SlotDurationInHours?: int|null,
     *     TermEndDate?: \Aws\Api\DateTimeResult|null,
     *     TermStartDate?: \Aws\Api\DateTimeResult|null,
     *     TotalScheduledInstanceHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
