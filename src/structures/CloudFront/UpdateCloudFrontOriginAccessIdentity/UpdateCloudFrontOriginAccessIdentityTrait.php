<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCloudFrontOriginAccessIdentity;

trait UpdateCloudFrontOriginAccessIdentityTrait
{
    /**
     * @param UpdateCloudFrontOriginAccessIdentityRequest $args
     * @return UpdateCloudFrontOriginAccessIdentityResponse
     */
    public function updateCloudFrontOriginAccessIdentity(UpdateCloudFrontOriginAccessIdentityRequest $args)
    {
        $result = parent::updateCloudFrontOriginAccessIdentity($args->toArray());
        return new UpdateCloudFrontOriginAccessIdentityResponse($result->toArray());
    }
}
