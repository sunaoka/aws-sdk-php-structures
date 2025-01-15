<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PredefinedMetricType
 */
class PredefinedMetricSpecification extends Shape
{
    /**
     * @param array{PredefinedMetricType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
