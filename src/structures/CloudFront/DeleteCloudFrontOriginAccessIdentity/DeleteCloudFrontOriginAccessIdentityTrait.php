<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteCloudFrontOriginAccessIdentity;

trait DeleteCloudFrontOriginAccessIdentityTrait
{
    /**
     * @param DeleteCloudFrontOriginAccessIdentityRequest $args
     * @return void
     */
    public function deleteCloudFrontOriginAccessIdentity(DeleteCloudFrontOriginAccessIdentityRequest $args)
    {
        parent::deleteCloudFrontOriginAccessIdentity($args->toArray());
    }
}
