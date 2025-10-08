<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginAccessControl;

trait GetOriginAccessControlTrait
{
    /**
     * @param GetOriginAccessControlRequest $args
     * @return GetOriginAccessControlResponse
     */
    public function getOriginAccessControl(GetOriginAccessControlRequest $args)
    {
        $result = parent::getOriginAccessControl($args->toArray());
        return new GetOriginAccessControlResponse($result->toArray());
    }
}
