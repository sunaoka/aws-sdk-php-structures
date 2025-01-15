<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Metric
 * @property string|null $DisplayName
 * @property array<string, string>|null $Dimensions
 * @property double|null $Value
 */
class PerformanceInsightsMetric extends Shape
{
    /**
     * @param array{
     *     Metric?: string|null,
     *     DisplayName?: string|null,
     *     Dimensions?: array<string, string>|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
