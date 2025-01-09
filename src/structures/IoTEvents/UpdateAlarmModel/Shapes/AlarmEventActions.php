<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlarmAction> $alarmActions
 */
class AlarmEventActions extends Shape
{
    /**
     * @param array{alarmActions?: list<AlarmAction>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
