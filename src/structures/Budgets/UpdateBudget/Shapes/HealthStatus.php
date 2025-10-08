<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'UNHEALTHY'|null $Status
 * @property 'BILLING_VIEW_NO_ACCESS'|'BILLING_VIEW_UNHEALTHY'|'FILTER_INVALID'|'MULTI_YEAR_HISTORICAL_DATA_DISABLED'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class HealthStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'HEALTHY'|'UNHEALTHY'|null,
     *     StatusReason?: 'BILLING_VIEW_NO_ACCESS'|'BILLING_VIEW_UNHEALTHY'|'FILTER_INVALID'|'MULTI_YEAR_HISTORICAL_DATA_DISABLED'|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
