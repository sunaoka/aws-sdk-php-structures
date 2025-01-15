<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Success'|'Failure'|'Dropped'|'Duration'|'TurnsPerConversation'|'Concurrency'|null $name
 * @property 'Sum'|'Avg'|'Max'|null $statistic
 * @property double|null $value
 */
class AnalyticsSessionMetricResult extends Shape
{
    /**
     * @param array{
     *     name?: 'Count'|'Success'|'Failure'|'Dropped'|'Duration'|'TurnsPerConversation'|'Concurrency'|null,
     *     statistic?: 'Sum'|'Avg'|'Max'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
