<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Success'|'Failure'|'Dropped'|'Duration'|'TurnsPerConversation'|'Concurrency' $name
 * @property 'Sum'|'Avg'|'Max' $statistic
 * @property 'Ascending'|'Descending' $order
 */
class AnalyticsSessionMetric extends Shape
{
    /**
     * @param array{
     *     name: 'Count'|'Success'|'Failure'|'Dropped'|'Duration'|'TurnsPerConversation'|'Concurrency',
     *     statistic: 'Sum'|'Avg'|'Max',
     *     order?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
