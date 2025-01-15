<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredefinedMetricSpecification|null $Predefined
 * @property CustomizedMetricSpecification|null $Customized
 */
class MetricSpecification extends Shape
{
    /**
     * @param array{
     *     Predefined?: PredefinedMetricSpecification|null,
     *     Customized?: CustomizedMetricSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
