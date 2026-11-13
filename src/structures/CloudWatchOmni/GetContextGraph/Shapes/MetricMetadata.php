<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $preferredStat
 * @property string|null $metricType
 * @property array<string, string>|null $attributes
 * @property MetricSemantics|null $semantics
 * @property 'delta'|'cumulative'|null $aggregationTemporality
 * @property 'monotonic'|'non_monotonic'|null $monotonicity
 */
class MetricMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     preferredStat?: string|null,
     *     metricType?: string|null,
     *     attributes?: array<string, string>|null,
     *     semantics?: MetricSemantics|null,
     *     aggregationTemporality?: 'delta'|'cumulative'|null,
     *     monotonicity?: 'monotonic'|'non_monotonic'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
