<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredefinedMetricSpecification $Predefined
 * @property CustomizedMetricSpecification $Customized
 */
class MetricSpecification extends Shape
{
    /**
     * @param array{
     *     Predefined?: PredefinedMetricSpecification,
     *     Customized?: CustomizedMetricSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
