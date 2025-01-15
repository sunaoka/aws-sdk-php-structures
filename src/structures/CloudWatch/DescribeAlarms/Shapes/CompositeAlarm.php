<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ActionsEnabled
 * @property list<string>|null $AlarmActions
 * @property string|null $AlarmArn
 * @property \Aws\Api\DateTimeResult|null $AlarmConfigurationUpdatedTimestamp
 * @property string|null $AlarmDescription
 * @property string|null $AlarmName
 * @property string|null $AlarmRule
 * @property list<string>|null $InsufficientDataActions
 * @property list<string>|null $OKActions
 * @property string|null $StateReason
 * @property string|null $StateReasonData
 * @property \Aws\Api\DateTimeResult|null $StateUpdatedTimestamp
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null $StateValue
 * @property \Aws\Api\DateTimeResult|null $StateTransitionedTimestamp
 * @property 'WaitPeriod'|'ExtensionPeriod'|'Alarm'|null $ActionsSuppressedBy
 * @property string|null $ActionsSuppressedReason
 * @property string|null $ActionsSuppressor
 * @property int|null $ActionsSuppressorWaitPeriod
 * @property int|null $ActionsSuppressorExtensionPeriod
 */
class CompositeAlarm extends Shape
{
    /**
     * @param array{
     *     ActionsEnabled?: bool|null,
     *     AlarmActions?: list<string>|null,
     *     AlarmArn?: string|null,
     *     AlarmConfigurationUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AlarmDescription?: string|null,
     *     AlarmName?: string|null,
     *     AlarmRule?: string|null,
     *     InsufficientDataActions?: list<string>|null,
     *     OKActions?: list<string>|null,
     *     StateReason?: string|null,
     *     StateReasonData?: string|null,
     *     StateUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StateValue?: 'OK'|'ALARM'|'INSUFFICIENT_DATA'|null,
     *     StateTransitionedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ActionsSuppressedBy?: 'WaitPeriod'|'ExtensionPeriod'|'Alarm'|null,
     *     ActionsSuppressedReason?: string|null,
     *     ActionsSuppressor?: string|null,
     *     ActionsSuppressorWaitPeriod?: int|null,
     *     ActionsSuppressorExtensionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
