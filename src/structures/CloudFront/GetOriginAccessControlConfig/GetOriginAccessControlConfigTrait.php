<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginAccessControlConfig;

trait GetOriginAccessControlConfigTrait
{
    /**
     * @param GetOriginAccessControlConfigRequest $args
     * @return GetOriginAccessControlConfigResponse
     */
    public function getOriginAccessControlConfig(GetOriginAccessControlConfigRequest $args)
    {
        $result = parent::getOriginAccessControlConfig($args->toArray());
        return new GetOriginAccessControlConfigResponse($result->toArray());
    }
}
