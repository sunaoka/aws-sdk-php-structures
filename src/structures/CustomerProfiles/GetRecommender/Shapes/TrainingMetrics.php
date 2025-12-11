<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property array<'hit'|'coverage'|'recall'|'popularity'|'freshness'|'similarity', double>|null $Metrics
 */
class TrainingMetrics extends Shape
{
    /**
     * @param array{
     *     Time?: \Aws\Api\DateTimeResult|null,
     *     Metrics?: array<'hit'|'coverage'|'recall'|'popularity'|'freshness'|'similarity', double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
