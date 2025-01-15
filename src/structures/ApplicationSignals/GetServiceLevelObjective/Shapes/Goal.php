<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Interval|null $Interval
 * @property double|null $AttainmentGoal
 * @property double|null $WarningThreshold
 */
class Goal extends Shape
{
    /**
     * @param array{
     *     Interval?: Interval|null,
     *     AttainmentGoal?: double|null,
     *     WarningThreshold?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
