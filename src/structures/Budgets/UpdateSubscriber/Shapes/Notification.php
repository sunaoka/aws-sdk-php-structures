<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTUAL'|'FORECASTED' $NotificationType
 * @property 'GREATER_THAN'|'LESS_THAN'|'EQUAL_TO' $ComparisonOperator
 * @property double $Threshold
 * @property 'PERCENTAGE'|'ABSOLUTE_VALUE' $ThresholdType
 * @property 'OK'|'ALARM' $NotificationState
 */
class Notification extends Shape
{
    /**
     * @param array{
     *     NotificationType: 'ACTUAL'|'FORECASTED',
     *     ComparisonOperator: 'GREATER_THAN'|'LESS_THAN'|'EQUAL_TO',
     *     Threshold: double,
     *     ThresholdType?: 'PERCENTAGE'|'ABSOLUTE_VALUE',
     *     NotificationState?: 'OK'|'ALARM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
