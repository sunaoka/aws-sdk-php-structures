<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetServiceQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricNamespace
 * @property string $MetricName
 * @property array<string, string> $MetricDimensions
 * @property string $MetricStatisticRecommendation
 */
class MetricInfo extends Shape
{
    /**
     * @param array{
     *     MetricNamespace?: string,
     *     MetricName?: string,
     *     MetricDimensions?: array<string, string>,
     *     MetricStatisticRecommendation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
