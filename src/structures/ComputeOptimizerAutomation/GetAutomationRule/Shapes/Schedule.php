<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scheduleExpression
 * @property string|null $scheduleExpressionTimezone
 * @property int<60, 1440>|null $executionWindowInMinutes
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     scheduleExpression?: string|null,
     *     scheduleExpressionTimezone?: string|null,
     *     executionWindowInMinutes?: int<60, 1440>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
