<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricsEndpointPath
 * @property int|null $MetricPublishFrequencyInSeconds
 */
class MetricsEndpoint extends Shape
{
    /**
     * @param array{
     *     MetricsEndpointPath: string,
     *     MetricPublishFrequencyInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
