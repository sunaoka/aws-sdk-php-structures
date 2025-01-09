<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlarmName
 * @property 'CompositeAlarm'|'MetricAlarm' $AlarmType
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property 'ConfigurationUpdate'|'StateUpdate'|'Action' $HistoryItemType
 * @property string $HistorySummary
 * @property string $HistoryData
 */
class AlarmHistoryItem extends Shape
{
    /**
     * @param array{
     *     AlarmName?: string,
     *     AlarmType?: 'CompositeAlarm'|'MetricAlarm',
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     HistoryItemType?: 'ConfigurationUpdate'|'StateUpdate'|'Action',
     *     HistorySummary?: string,
     *     HistoryData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
