<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property string $DisplayName
 * @property array<string, string> $Dimensions
 * @property double $Value
 */
class PerformanceInsightsMetric extends Shape
{
    /**
     * @param array{
     *     Metric?: string,
     *     DisplayName?: string,
     *     Dimensions?: array<string, string>,
     *     Value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
