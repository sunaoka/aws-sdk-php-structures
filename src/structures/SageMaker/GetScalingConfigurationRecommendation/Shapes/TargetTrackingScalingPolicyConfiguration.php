<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricSpecification|null $MetricSpecification
 * @property double|null $TargetValue
 */
class TargetTrackingScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     MetricSpecification?: MetricSpecification|null,
     *     TargetValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
