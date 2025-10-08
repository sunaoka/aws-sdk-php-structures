<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCachePolicyConfig;

trait GetCachePolicyConfigTrait
{
    /**
     * @param GetCachePolicyConfigRequest $args
     * @return GetCachePolicyConfigResponse
     */
    public function getCachePolicyConfig(GetCachePolicyConfigRequest $args)
    {
        $result = parent::getCachePolicyConfig($args->toArray());
        return new GetCachePolicyConfigResponse($result->toArray());
    }
}
