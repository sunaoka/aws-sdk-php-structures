<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IgnorePollAlarmFailure
 * @property list<Alarm> $Alarms
 */
class AlarmConfiguration extends Shape
{
    /**
     * @param array{
     *     IgnorePollAlarmFailure?: bool|null,
     *     Alarms: list<Alarm>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
