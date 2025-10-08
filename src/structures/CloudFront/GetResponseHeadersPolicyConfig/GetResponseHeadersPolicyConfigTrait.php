<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicyConfig;

trait GetResponseHeadersPolicyConfigTrait
{
    /**
     * @param GetResponseHeadersPolicyConfigRequest $args
     * @return GetResponseHeadersPolicyConfigResponse
     */
    public function getResponseHeadersPolicyConfig(GetResponseHeadersPolicyConfigRequest $args)
    {
        $result = parent::getResponseHeadersPolicyConfig($args->toArray());
        return new GetResponseHeadersPolicyConfigResponse($result->toArray());
    }
}
