<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $namespace
 * @property string|null $preferredStat
 * @property string|null $metricType
 * @property array<string, string>|null $attributes
 * @property MetricSemantics|null $semantics
 */
class MetricMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     namespace?: string|null,
     *     preferredStat?: string|null,
     *     metricType?: string|null,
     *     attributes?: array<string, string>|null,
     *     semantics?: MetricSemantics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
