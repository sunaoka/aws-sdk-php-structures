<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetContinuousDeploymentPolicy;

trait GetContinuousDeploymentPolicyTrait
{
    /**
     * @param GetContinuousDeploymentPolicyRequest $args
     * @return GetContinuousDeploymentPolicyResponse
     */
    public function getContinuousDeploymentPolicy(GetContinuousDeploymentPolicyRequest $args)
    {
        $result = parent::getContinuousDeploymentPolicy($args->toArray());
        return new GetContinuousDeploymentPolicyResponse($result->toArray());
    }
}
