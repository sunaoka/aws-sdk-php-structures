<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstanceAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property Shapes\SlotDateTimeRangeRequest $FirstSlotStartTimeRange
 * @property int<5, 300> $MaxResults
 * @property int $MaxSlotDurationInHours
 * @property int $MinSlotDurationInHours
 * @property string $NextToken
 * @property Shapes\ScheduledInstanceRecurrenceRequest $Recurrence
 */
class DescribeScheduledInstanceAvailabilityRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     FirstSlotStartTimeRange: Shapes\SlotDateTimeRangeRequest,
     *     MaxResults?: int<5, 300>,
     *     MaxSlotDurationInHours?: int,
     *     MinSlotDurationInHours?: int,
     *     NextToken?: string,
     *     Recurrence: Shapes\ScheduledInstanceRecurrenceRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
