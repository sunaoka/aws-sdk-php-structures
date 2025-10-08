<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicyConfig;

trait GetOriginRequestPolicyConfigTrait
{
    /**
     * @param GetOriginRequestPolicyConfigRequest $args
     * @return GetOriginRequestPolicyConfigResponse
     */
    public function getOriginRequestPolicyConfig(GetOriginRequestPolicyConfigRequest $args)
    {
        $result = parent::getOriginRequestPolicyConfig($args->toArray());
        return new GetOriginRequestPolicyConfigResponse($result->toArray());
    }
}
