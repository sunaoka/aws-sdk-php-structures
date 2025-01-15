<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $ScheduledInstanceIds
 * @property Shapes\SlotStartTimeRangeRequest|null $SlotStartTimeRange
 */
class DescribeScheduledInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     ScheduledInstanceIds?: list<string>|null,
     *     SlotStartTimeRange?: Shapes\SlotStartTimeRangeRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
