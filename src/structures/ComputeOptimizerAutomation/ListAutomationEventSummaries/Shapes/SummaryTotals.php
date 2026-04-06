<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $automationEventCount
 * @property EstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class SummaryTotals extends Shape
{
    /**
     * @param array{
     *     automationEventCount?: int|null,
     *     estimatedMonthlySavings?: EstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
