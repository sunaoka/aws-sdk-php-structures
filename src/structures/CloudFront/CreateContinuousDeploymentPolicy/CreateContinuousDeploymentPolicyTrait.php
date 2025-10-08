<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateContinuousDeploymentPolicy;

trait CreateContinuousDeploymentPolicyTrait
{
    /**
     * @param CreateContinuousDeploymentPolicyRequest $args
     * @return CreateContinuousDeploymentPolicyResponse
     */
    public function createContinuousDeploymentPolicy(CreateContinuousDeploymentPolicyRequest $args)
    {
        $result = parent::createContinuousDeploymentPolicy($args->toArray());
        return new CreateContinuousDeploymentPolicyResponse($result->toArray());
    }
}
