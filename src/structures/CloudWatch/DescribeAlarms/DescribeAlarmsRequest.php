<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AlarmNames
 * @property string $AlarmNamePrefix
 * @property list<'CompositeAlarm'|'MetricAlarm'> $AlarmTypes
 * @property string $ChildrenOfAlarmName
 * @property string $ParentsOfAlarmName
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA' $StateValue
 * @property string $ActionPrefix
 * @property int $MaxRecords
 * @property string $NextToken
 */
class DescribeAlarmsRequest extends Request
{
    /**
     * @param array{
     *     AlarmNames?: list<string>,
     *     AlarmNamePrefix?: string,
     *     AlarmTypes?: list<'CompositeAlarm'|'MetricAlarm'>,
     *     ChildrenOfAlarmName?: string,
     *     ParentsOfAlarmName?: string,
     *     StateValue?: 'OK'|'ALARM'|'INSUFFICIENT_DATA',
     *     ActionPrefix?: string,
     *     MaxRecords?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
