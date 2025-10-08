<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $TotalRowsProcessed
 * @property double|null $TotalRowsPassed
 * @property double|null $TotalRowsFailed
 * @property double|null $TotalRulesProcessed
 * @property double|null $TotalRulesPassed
 * @property double|null $TotalRulesFailed
 */
class DataQualityAggregatedMetrics extends Shape
{
    /**
     * @param array{
     *     TotalRowsProcessed?: double|null,
     *     TotalRowsPassed?: double|null,
     *     TotalRowsFailed?: double|null,
     *     TotalRulesProcessed?: double|null,
     *     TotalRulesPassed?: double|null,
     *     TotalRulesFailed?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
