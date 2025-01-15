<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Success'|'Failed'|'Dropped'|'Retry'|null $name
 * @property 'Sum'|'Avg'|'Max'|null $statistic
 * @property double|null $value
 */
class AnalyticsIntentStageMetricResult extends Shape
{
    /**
     * @param array{
     *     name?: 'Count'|'Success'|'Failed'|'Dropped'|'Retry'|null,
     *     statistic?: 'Sum'|'Avg'|'Max'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
