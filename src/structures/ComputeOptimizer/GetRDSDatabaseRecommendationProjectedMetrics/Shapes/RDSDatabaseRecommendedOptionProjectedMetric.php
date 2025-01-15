<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recommendedDBInstanceClass
 * @property int|null $rank
 * @property list<RDSDatabaseProjectedMetric>|null $projectedMetrics
 */
class RDSDatabaseRecommendedOptionProjectedMetric extends Shape
{
    /**
     * @param array{
     *     recommendedDBInstanceClass?: string|null,
     *     rank?: int|null,
     *     projectedMetrics?: list<RDSDatabaseProjectedMetric>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
