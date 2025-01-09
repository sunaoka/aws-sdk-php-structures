<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Success'|'Failure'|'Switched'|'Dropped' $name
 * @property 'Sum'|'Avg'|'Max' $statistic
 * @property double $value
 */
class AnalyticsIntentMetricResult extends Shape
{
    /**
     * @param array{
     *     name?: 'Count'|'Success'|'Failure'|'Switched'|'Dropped',
     *     statistic?: 'Sum'|'Avg'|'Max',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
