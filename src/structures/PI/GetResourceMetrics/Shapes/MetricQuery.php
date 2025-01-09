<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property DimensionGroup $GroupBy
 * @property array<string, string> $Filter
 */
class MetricQuery extends Shape
{
    /**
     * @param array{
     *     Metric: string,
     *     GroupBy?: DimensionGroup,
     *     Filter?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
