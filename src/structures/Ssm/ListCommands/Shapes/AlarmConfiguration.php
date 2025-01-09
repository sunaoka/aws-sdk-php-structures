<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IgnorePollAlarmFailure
 * @property list<Alarm> $Alarms
 */
class AlarmConfiguration extends Shape
{
    /**
     * @param array{
     *     IgnorePollAlarmFailure?: bool,
     *     Alarms: list<Alarm>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
