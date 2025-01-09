<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Success'|'Failed'|'Dropped'|'Retry' $name
 * @property 'Sum'|'Avg'|'Max' $statistic
 * @property 'Ascending'|'Descending' $order
 */
class AnalyticsIntentStageMetric extends Shape
{
    /**
     * @param array{
     *     name: 'Count'|'Success'|'Failed'|'Dropped'|'Retry',
     *     statistic: 'Sum'|'Avg'|'Max',
     *     order?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
