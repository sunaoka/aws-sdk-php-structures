<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlarmName
 * @property list<'CompositeAlarm'|'MetricAlarm'> $AlarmTypes
 * @property 'ConfigurationUpdate'|'StateUpdate'|'Action' $HistoryItemType
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property int $MaxRecords
 * @property string $NextToken
 * @property 'TimestampDescending'|'TimestampAscending' $ScanBy
 */
class DescribeAlarmHistoryRequest extends Request
{
    /**
     * @param array{
     *     AlarmName?: string,
     *     AlarmTypes?: list<'CompositeAlarm'|'MetricAlarm'>,
     *     HistoryItemType?: 'ConfigurationUpdate'|'StateUpdate'|'Action',
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     MaxRecords?: int,
     *     NextToken?: string,
     *     ScanBy?: 'TimestampDescending'|'TimestampAscending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
