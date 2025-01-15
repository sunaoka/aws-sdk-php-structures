<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTUAL'|'FORECASTED' $NotificationType
 * @property 'GREATER_THAN'|'LESS_THAN'|'EQUAL_TO' $ComparisonOperator
 * @property double $Threshold
 * @property 'PERCENTAGE'|'ABSOLUTE_VALUE'|null $ThresholdType
 * @property 'OK'|'ALARM'|null $NotificationState
 */
class Notification extends Shape
{
    /**
     * @param array{
     *     NotificationType: 'ACTUAL'|'FORECASTED',
     *     ComparisonOperator: 'GREATER_THAN'|'LESS_THAN'|'EQUAL_TO',
     *     Threshold: double,
     *     ThresholdType?: 'PERCENTAGE'|'ABSOLUTE_VALUE'|null,
     *     NotificationState?: 'OK'|'ALARM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
