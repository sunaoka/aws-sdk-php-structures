<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricSpecification $MetricSpecification
 * @property double $TargetValue
 */
class TargetTrackingScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecification?: MetricSpecification,
     *     TargetValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
