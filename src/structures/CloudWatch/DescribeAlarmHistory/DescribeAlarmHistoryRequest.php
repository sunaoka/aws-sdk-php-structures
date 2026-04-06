<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AlarmName
 * @property string|null $AlarmContributorId
 * @property list<'CompositeAlarm'|'MetricAlarm'>|null $AlarmTypes
 * @property 'ConfigurationUpdate'|'StateUpdate'|'Action'|'AlarmContributorStateUpdate'|'AlarmContributorAction'|null $HistoryItemType
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property int<1, 100>|null $MaxRecords
 * @property string|null $NextToken
 * @property 'TimestampDescending'|'TimestampAscending'|null $ScanBy
 */
class DescribeAlarmHistoryRequest extends Request
{
    /**
     * @param array{
     *     AlarmName?: string|null,
     *     AlarmContributorId?: string|null,
     *     AlarmTypes?: list<'CompositeAlarm'|'MetricAlarm'>|null,
     *     HistoryItemType?: 'ConfigurationUpdate'|'StateUpdate'|'Action'|'AlarmContributorStateUpdate'|'AlarmContributorAction'|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     MaxRecords?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ScanBy?: 'TimestampDescending'|'TimestampAscending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
