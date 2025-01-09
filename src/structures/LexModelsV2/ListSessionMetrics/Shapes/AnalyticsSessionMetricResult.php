<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Success'|'Failure'|'Dropped'|'Duration'|'TurnsPerConversation'|'Concurrency' $name
 * @property 'Sum'|'Avg'|'Max' $statistic
 * @property double $value
 */
class AnalyticsSessionMetricResult extends Shape
{
    /**
     * @param array{
     *     name?: 'Count'|'Success'|'Failure'|'Dropped'|'Duration'|'TurnsPerConversation'|'Concurrency',
     *     statistic?: 'Sum'|'Avg'|'Max',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
