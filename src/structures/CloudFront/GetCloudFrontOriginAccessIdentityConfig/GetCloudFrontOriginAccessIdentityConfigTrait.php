<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCloudFrontOriginAccessIdentityConfig;

trait GetCloudFrontOriginAccessIdentityConfigTrait
{
    /**
     * @param GetCloudFrontOriginAccessIdentityConfigRequest $args
     * @return GetCloudFrontOriginAccessIdentityConfigResponse
     */
    public function getCloudFrontOriginAccessIdentityConfig(GetCloudFrontOriginAccessIdentityConfigRequest $args)
    {
        $result = parent::getCloudFrontOriginAccessIdentityConfig($args->toArray());
        return new GetCloudFrontOriginAccessIdentityConfigResponse($result->toArray());
    }
}
