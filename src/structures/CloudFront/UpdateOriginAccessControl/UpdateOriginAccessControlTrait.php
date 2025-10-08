<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginAccessControl;

trait UpdateOriginAccessControlTrait
{
    /**
     * @param UpdateOriginAccessControlRequest $args
     * @return UpdateOriginAccessControlResponse
     */
    public function updateOriginAccessControl(UpdateOriginAccessControlRequest $args)
    {
        $result = parent::updateOriginAccessControl($args->toArray());
        return new UpdateOriginAccessControlResponse($result->toArray());
    }
}
