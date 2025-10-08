<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AmortizedCost'|'BlendedCost'|'NetAmortizedCost'|'NetUnblendedCost'|'NormalizedUsageAmount'|'UnblendedCost'|'UsageQuantity'|'SpendCoveredBySavingsPlans'|'Hour'|'Unit'|'Cost'> $metrics
 * @property DateTimeRange $timeRange
 * @property 'HOURLY'|'DAILY'|'MONTHLY' $granularity
 * @property list<GroupDefinition>|null $groupBy
 * @property Expression|null $filter
 */
class CostAndUsageQuery extends Shape
{
    /**
     * @param array{
     *     metrics: list<'AmortizedCost'|'BlendedCost'|'NetAmortizedCost'|'NetUnblendedCost'|'NormalizedUsageAmount'|'UnblendedCost'|'UsageQuantity'|'SpendCoveredBySavingsPlans'|'Hour'|'Unit'|'Cost'>,
     *     timeRange: DateTimeRange,
     *     granularity: 'HOURLY'|'DAILY'|'MONTHLY',
     *     groupBy?: list<GroupDefinition>|null,
     *     filter?: Expression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
