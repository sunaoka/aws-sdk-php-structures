<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListContinuousDeploymentPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContinuousDeploymentPolicy $ContinuousDeploymentPolicy
 */
class ContinuousDeploymentPolicySummary extends Shape
{
    /**
     * @param array{ContinuousDeploymentPolicy: ContinuousDeploymentPolicy} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
