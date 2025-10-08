<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCloudFrontOriginAccessIdentity;

trait CreateCloudFrontOriginAccessIdentityTrait
{
    /**
     * @param CreateCloudFrontOriginAccessIdentityRequest $args
     * @return CreateCloudFrontOriginAccessIdentityResponse
     */
    public function createCloudFrontOriginAccessIdentity(CreateCloudFrontOriginAccessIdentityRequest $args)
    {
        $result = parent::createCloudFrontOriginAccessIdentity($args->toArray());
        return new CreateCloudFrontOriginAccessIdentityResponse($result->toArray());
    }
}
