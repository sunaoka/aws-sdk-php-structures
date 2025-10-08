<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCloudFrontOriginAccessIdentity;

trait GetCloudFrontOriginAccessIdentityTrait
{
    /**
     * @param GetCloudFrontOriginAccessIdentityRequest $args
     * @return GetCloudFrontOriginAccessIdentityResponse
     */
    public function getCloudFrontOriginAccessIdentity(GetCloudFrontOriginAccessIdentityRequest $args)
    {
        $result = parent::getCloudFrontOriginAccessIdentity($args->toArray());
        return new GetCloudFrontOriginAccessIdentityResponse($result->toArray());
    }
}
