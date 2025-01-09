<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Interval $Interval
 * @property double $AttainmentGoal
 * @property double $WarningThreshold
 */
class Goal extends Shape
{
    /**
     * @param array{
     *     Interval?: Interval,
     *     AttainmentGoal?: double,
     *     WarningThreshold?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
