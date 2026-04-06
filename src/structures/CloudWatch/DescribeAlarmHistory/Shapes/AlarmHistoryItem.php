<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlarmName
 * @property string|null $AlarmContributorId
 * @property 'CompositeAlarm'|'MetricAlarm'|null $AlarmType
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property 'ConfigurationUpdate'|'StateUpdate'|'Action'|'AlarmContributorStateUpdate'|'AlarmContributorAction'|null $HistoryItemType
 * @property string|null $HistorySummary
 * @property string|null $HistoryData
 * @property array<string, string>|null $AlarmContributorAttributes
 */
class AlarmHistoryItem extends Shape
{
    /**
     * @param array{
     *     AlarmName?: string|null,
     *     AlarmContributorId?: string|null,
     *     AlarmType?: 'CompositeAlarm'|'MetricAlarm'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     HistoryItemType?: 'ConfigurationUpdate'|'StateUpdate'|'Action'|'AlarmContributorStateUpdate'|'AlarmContributorAction'|null,
     *     HistorySummary?: string|null,
     *     HistoryData?: string|null,
     *     AlarmContributorAttributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
