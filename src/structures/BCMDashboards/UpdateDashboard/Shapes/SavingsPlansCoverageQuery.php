<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateTimeRange $timeRange
 * @property list<'AmortizedCost'|'BlendedCost'|'NetAmortizedCost'|'NetUnblendedCost'|'NormalizedUsageAmount'|'UnblendedCost'|'UsageQuantity'|'SpendCoveredBySavingsPlans'|'Hour'|'Unit'|'Cost'>|null $metrics
 * @property 'HOURLY'|'DAILY'|'MONTHLY'|null $granularity
 * @property list<GroupDefinition>|null $groupBy
 * @property Expression|null $filter
 */
class SavingsPlansCoverageQuery extends Shape
{
    /**
     * @param array{
     *     timeRange: DateTimeRange,
     *     metrics?: list<'AmortizedCost'|'BlendedCost'|'NetAmortizedCost'|'NetUnblendedCost'|'NormalizedUsageAmount'|'UnblendedCost'|'UsageQuantity'|'SpendCoveredBySavingsPlans'|'Hour'|'Unit'|'Cost'>|null,
     *     granularity?: 'HOURLY'|'DAILY'|'MONTHLY'|null,
     *     groupBy?: list<GroupDefinition>|null,
     *     filter?: Expression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
