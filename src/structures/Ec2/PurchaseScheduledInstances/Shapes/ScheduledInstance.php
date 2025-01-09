<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $HourlyPrice
 * @property int $InstanceCount
 * @property string $InstanceType
 * @property string $NetworkPlatform
 * @property \Aws\Api\DateTimeResult $NextSlotStartTime
 * @property string $Platform
 * @property \Aws\Api\DateTimeResult $PreviousSlotEndTime
 * @property ScheduledInstanceRecurrence $Recurrence
 * @property string $ScheduledInstanceId
 * @property int $SlotDurationInHours
 * @property \Aws\Api\DateTimeResult $TermEndDate
 * @property \Aws\Api\DateTimeResult $TermStartDate
 * @property int $TotalScheduledInstanceHours
 */
class ScheduledInstance extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     HourlyPrice?: string,
     *     InstanceCount?: int,
     *     InstanceType?: string,
     *     NetworkPlatform?: string,
     *     NextSlotStartTime?: \Aws\Api\DateTimeResult,
     *     Platform?: string,
     *     PreviousSlotEndTime?: \Aws\Api\DateTimeResult,
     *     Recurrence?: ScheduledInstanceRecurrence,
     *     ScheduledInstanceId?: string,
     *     SlotDurationInHours?: int,
     *     TermEndDate?: \Aws\Api\DateTimeResult,
     *     TermStartDate?: \Aws\Api\DateTimeResult,
     *     TotalScheduledInstanceHours?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
