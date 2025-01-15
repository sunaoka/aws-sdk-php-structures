<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property DimensionGroup|null $GroupBy
 * @property array<string, string>|null $Filter
 */
class MetricQuery extends Shape
{
    /**
     * @param array{
     *     Metric: string,
     *     GroupBy?: DimensionGroup|null,
     *     Filter?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
