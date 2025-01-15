<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AlarmNames
 * @property string|null $AlarmNamePrefix
 * @property list<'CompositeAlarm'|'MetricAlarm'>|null $AlarmTypes
 * @property string|null $ChildrenOfAlarmName
 * @property string|null $ParentsOfAlarmName
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null $StateValue
 * @property string|null $ActionPrefix
 * @property int<1, 100>|null $MaxRecords
 * @property string|null $NextToken
 */
class DescribeAlarmsRequest extends Request
{
    /**
     * @param array{
     *     AlarmNames?: list<string>|null,
     *     AlarmNamePrefix?: string|null,
     *     AlarmTypes?: list<'CompositeAlarm'|'MetricAlarm'>|null,
     *     ChildrenOfAlarmName?: string|null,
     *     ParentsOfAlarmName?: string|null,
     *     StateValue?: 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null,
     *     ActionPrefix?: string|null,
     *     MaxRecords?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
