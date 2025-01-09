<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListContinuousDeploymentPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContinuousDeploymentSingleWeightConfig $SingleWeightConfig
 * @property ContinuousDeploymentSingleHeaderConfig $SingleHeaderConfig
 * @property 'SingleWeight'|'SingleHeader' $Type
 */
class TrafficConfig extends Shape
{
    /**
     * @param array{
     *     SingleWeightConfig?: ContinuousDeploymentSingleWeightConfig,
     *     SingleHeaderConfig?: ContinuousDeploymentSingleHeaderConfig,
     *     Type: 'SingleWeight'|'SingleHeader'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
