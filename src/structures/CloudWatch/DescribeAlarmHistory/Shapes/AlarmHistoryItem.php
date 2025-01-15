<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlarmName
 * @property 'CompositeAlarm'|'MetricAlarm'|null $AlarmType
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property 'ConfigurationUpdate'|'StateUpdate'|'Action'|null $HistoryItemType
 * @property string|null $HistorySummary
 * @property string|null $HistoryData
 */
class AlarmHistoryItem extends Shape
{
    /**
     * @param array{
     *     AlarmName?: string|null,
     *     AlarmType?: 'CompositeAlarm'|'MetricAlarm'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     HistoryItemType?: 'ConfigurationUpdate'|'StateUpdate'|'Action'|null,
     *     HistorySummary?: string|null,
     *     HistoryData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
