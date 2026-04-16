<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property array<'hit'|'coverage'|'recall'|'popularity'|'freshness'|'similarity'|'mean_reciprocal_rank_at_25'|'normalized_discounted_cumulative_gain_at_5'|'normalized_discounted_cumulative_gain_at_10'|'normalized_discounted_cumulative_gain_at_25'|'precision_at_5'|'precision_at_10'|'precision_at_25', double>|null $Metrics
 */
class TrainingMetrics extends Shape
{
    /**
     * @param array{
     *     Time?: \Aws\Api\DateTimeResult|null,
     *     Metrics?: array<'hit'|'coverage'|'recall'|'popularity'|'freshness'|'similarity'|'mean_reciprocal_rank_at_25'|'normalized_discounted_cumulative_gain_at_5'|'normalized_discounted_cumulative_gain_at_10'|'normalized_discounted_cumulative_gain_at_25'|'precision_at_5'|'precision_at_10'|'precision_at_25', double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
