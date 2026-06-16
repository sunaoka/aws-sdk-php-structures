<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricsEndpoint>|null $MetricsEndpoints
 */
class ContainerMetricsConfig extends Shape
{
    /**
     * @param array{MetricsEndpoints?: list<MetricsEndpoint>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
