<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaAction|null $lambdaAction
 */
class NotificationTargetActions extends Shape
{
    /**
     * @param array{lambdaAction?: LambdaAction|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
