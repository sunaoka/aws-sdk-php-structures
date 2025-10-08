<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetContinuousDeploymentPolicyConfig;

trait GetContinuousDeploymentPolicyConfigTrait
{
    /**
     * @param GetContinuousDeploymentPolicyConfigRequest $args
     * @return GetContinuousDeploymentPolicyConfigResponse
     */
    public function getContinuousDeploymentPolicyConfig(GetContinuousDeploymentPolicyConfigRequest $args)
    {
        $result = parent::getContinuousDeploymentPolicyConfig($args->toArray());
        return new GetContinuousDeploymentPolicyConfigResponse($result->toArray());
    }
}
