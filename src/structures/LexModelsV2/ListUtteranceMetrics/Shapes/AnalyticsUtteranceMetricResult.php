<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'Missed'|'Detected'|'UtteranceTimestamp' $name
 * @property 'Sum'|'Avg'|'Max' $statistic
 * @property double $value
 */
class AnalyticsUtteranceMetricResult extends Shape
{
    /**
     * @param array{
     *     name?: 'Count'|'Missed'|'Detected'|'UtteranceTimestamp',
     *     statistic?: 'Sum'|'Avg'|'Max',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
