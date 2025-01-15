<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstanceAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property Shapes\SlotDateTimeRangeRequest $FirstSlotStartTimeRange
 * @property int<5, 300>|null $MaxResults
 * @property int|null $MaxSlotDurationInHours
 * @property int|null $MinSlotDurationInHours
 * @property string|null $NextToken
 * @property Shapes\ScheduledInstanceRecurrenceRequest $Recurrence
 */
class DescribeScheduledInstanceAvailabilityRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     FirstSlotStartTimeRange: Shapes\SlotDateTimeRangeRequest,
     *     MaxResults?: int<5, 300>|null,
     *     MaxSlotDurationInHours?: int|null,
     *     MinSlotDurationInHours?: int|null,
     *     NextToken?: string|null,
     *     Recurrence: Shapes\ScheduledInstanceRecurrenceRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
