<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FreeTrialDaysRemaining
 */
class DataSourceFreeTrial extends Shape
{
    /**
     * @param array{FreeTrialDaysRemaining?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
