<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Missed'|'Detected'|'UtteranceTimestamp'|null $name
 * @property 'Sum'|'Avg'|'Max'|null $statistic
 * @property double|null $value
 */
class AnalyticsUtteranceMetricResult extends Shape
{
    /**
     * @param array{
     *     name?: 'Count'|'Missed'|'Detected'|'UtteranceTimestamp'|null,
     *     statistic?: 'Sum'|'Avg'|'Max'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
