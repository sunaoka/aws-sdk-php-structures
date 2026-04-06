<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property list<SummaryDimension>|null $dimensions
 * @property TimePeriod|null $timePeriod
 * @property SummaryTotals|null $total
 */
class AutomationEventSummary extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     dimensions?: list<SummaryDimension>|null,
     *     timePeriod?: TimePeriod|null,
     *     total?: SummaryTotals|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
