<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateContinuousDeploymentPolicy;

trait UpdateContinuousDeploymentPolicyTrait
{
    /**
     * @param UpdateContinuousDeploymentPolicyRequest $args
     * @return UpdateContinuousDeploymentPolicyResponse
     */
    public function updateContinuousDeploymentPolicy(UpdateContinuousDeploymentPolicyRequest $args)
    {
        $result = parent::updateContinuousDeploymentPolicy($args->toArray());
        return new UpdateContinuousDeploymentPolicyResponse($result->toArray());
    }
}
