<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListContinuousDeploymentPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContinuousDeploymentSingleWeightConfig|null $SingleWeightConfig
 * @property ContinuousDeploymentSingleHeaderConfig|null $SingleHeaderConfig
 * @property 'SingleWeight'|'SingleHeader' $Type
 */
class TrafficConfig extends Shape
{
    /**
     * @param array{
     *     SingleWeightConfig?: ContinuousDeploymentSingleWeightConfig|null,
     *     SingleHeaderConfig?: ContinuousDeploymentSingleHeaderConfig|null,
     *     Type: 'SingleWeight'|'SingleHeader'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
