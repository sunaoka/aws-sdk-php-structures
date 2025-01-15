<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Success'|'Failure'|'Switched'|'Dropped'|null $name
 * @property 'Sum'|'Avg'|'Max'|null $statistic
 * @property double|null $value
 */
class AnalyticsIntentMetricResult extends Shape
{
    /**
     * @param array{
     *     name?: 'Count'|'Success'|'Failure'|'Switched'|'Dropped'|null,
     *     statistic?: 'Sum'|'Avg'|'Max'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
