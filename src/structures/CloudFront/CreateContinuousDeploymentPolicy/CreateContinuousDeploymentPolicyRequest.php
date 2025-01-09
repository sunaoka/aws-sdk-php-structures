<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateContinuousDeploymentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContinuousDeploymentPolicyConfig $ContinuousDeploymentPolicyConfig
 */
class CreateContinuousDeploymentPolicyRequest extends Request
{
    /**
     * @param array{ContinuousDeploymentPolicyConfig: Shapes\ContinuousDeploymentPolicyConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
