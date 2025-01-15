<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlarmAction>|null $alarmActions
 */
class AlarmEventActions extends Shape
{
    /**
     * @param array{alarmActions?: list<AlarmAction>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
