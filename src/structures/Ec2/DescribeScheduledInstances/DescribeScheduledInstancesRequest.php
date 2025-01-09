<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<string> $ScheduledInstanceIds
 * @property Shapes\SlotStartTimeRangeRequest $SlotStartTimeRange
 */
class DescribeScheduledInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ScheduledInstanceIds?: list<string>,
     *     SlotStartTimeRange?: Shapes\SlotStartTimeRangeRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
