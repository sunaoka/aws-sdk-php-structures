<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaAction $lambdaAction
 */
class NotificationTargetActions extends Shape
{
    /**
     * @param array{lambdaAction?: LambdaAction} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
