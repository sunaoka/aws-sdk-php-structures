<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateTimeRange $timeRange
 * @property 'HOURLY'|'DAILY'|'MONTHLY'|null $granularity
 * @property Expression|null $filter
 */
class SavingsPlansUtilizationQuery extends Shape
{
    /**
     * @param array{
     *     timeRange: DateTimeRange,
     *     granularity?: 'HOURLY'|'DAILY'|'MONTHLY'|null,
     *     filter?: Expression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
