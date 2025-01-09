<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendedDBInstanceClass
 * @property int $rank
 * @property list<RDSDatabaseProjectedMetric> $projectedMetrics
 */
class RDSDatabaseRecommendedOptionProjectedMetric extends Shape
{
    /**
     * @param array{
     *     recommendedDBInstanceClass?: string,
     *     rank?: int,
     *     projectedMetrics?: list<RDSDatabaseProjectedMetric>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
