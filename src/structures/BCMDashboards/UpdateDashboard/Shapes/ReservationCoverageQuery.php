<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateTimeRange $timeRange
 * @property list<GroupDefinition>|null $groupBy
 * @property 'HOURLY'|'DAILY'|'MONTHLY'|null $granularity
 * @property Expression|null $filter
 * @property list<'AmortizedCost'|'BlendedCost'|'NetAmortizedCost'|'NetUnblendedCost'|'NormalizedUsageAmount'|'UnblendedCost'|'UsageQuantity'|'SpendCoveredBySavingsPlans'|'Hour'|'Unit'|'Cost'>|null $metrics
 */
class ReservationCoverageQuery extends Shape
{
    /**
     * @param array{
     *     timeRange: DateTimeRange,
     *     groupBy?: list<GroupDefinition>|null,
     *     granularity?: 'HOURLY'|'DAILY'|'MONTHLY'|null,
     *     filter?: Expression|null,
     *     metrics?: list<'AmortizedCost'|'BlendedCost'|'NetAmortizedCost'|'NetUnblendedCost'|'NormalizedUsageAmount'|'UnblendedCost'|'UsageQuantity'|'SpendCoveredBySavingsPlans'|'Hour'|'Unit'|'Cost'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
