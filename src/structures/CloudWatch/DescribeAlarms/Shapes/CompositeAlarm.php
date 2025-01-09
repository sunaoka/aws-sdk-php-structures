<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ActionsEnabled
 * @property list<string> $AlarmActions
 * @property string $AlarmArn
 * @property \Aws\Api\DateTimeResult $AlarmConfigurationUpdatedTimestamp
 * @property string $AlarmDescription
 * @property string $AlarmName
 * @property string $AlarmRule
 * @property list<string> $InsufficientDataActions
 * @property list<string> $OKActions
 * @property string $StateReason
 * @property string $StateReasonData
 * @property \Aws\Api\DateTimeResult $StateUpdatedTimestamp
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA' $StateValue
 * @property \Aws\Api\DateTimeResult $StateTransitionedTimestamp
 * @property 'WaitPeriod'|'ExtensionPeriod'|'Alarm' $ActionsSuppressedBy
 * @property string $ActionsSuppressedReason
 * @property string $ActionsSuppressor
 * @property int $ActionsSuppressorWaitPeriod
 * @property int $ActionsSuppressorExtensionPeriod
 */
class CompositeAlarm extends Shape
{
    /**
     * @param array{
     *     ActionsEnabled?: bool,
     *     AlarmActions?: list<string>,
     *     AlarmArn?: string,
     *     AlarmConfigurationUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     AlarmDescription?: string,
     *     AlarmName?: string,
     *     AlarmRule?: string,
     *     InsufficientDataActions?: list<string>,
     *     OKActions?: list<string>,
     *     StateReason?: string,
     *     StateReasonData?: string,
     *     StateUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     StateValue?: 'OK'|'ALARM'|'INSUFFICIENT_DATA',
     *     StateTransitionedTimestamp?: \Aws\Api\DateTimeResult,
     *     ActionsSuppressedBy?: 'WaitPeriod'|'ExtensionPeriod'|'Alarm',
     *     ActionsSuppressedReason?: string,
     *     ActionsSuppressor?: string,
     *     ActionsSuppressorWaitPeriod?: int,
     *     ActionsSuppressorExtensionPeriod?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
