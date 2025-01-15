<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricNamespace
 * @property string|null $MetricName
 * @property array<string, string>|null $MetricDimensions
 * @property string|null $MetricStatisticRecommendation
 */
class MetricInfo extends Shape
{
    /**
     * @param array{
     *     MetricNamespace?: string|null,
     *     MetricName?: string|null,
     *     MetricDimensions?: array<string, string>|null,
     *     MetricStatisticRecommendation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
