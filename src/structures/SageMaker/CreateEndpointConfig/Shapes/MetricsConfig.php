<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableEnhancedMetrics
 * @property int|null $MetricPublishFrequencyInSeconds
 */
class MetricsConfig extends Shape
{
    /**
     * @param array{
     *     EnableEnhancedMetrics?: bool|null,
     *     MetricPublishFrequencyInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
