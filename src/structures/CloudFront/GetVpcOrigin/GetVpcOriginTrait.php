<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetVpcOrigin;

trait GetVpcOriginTrait
{
    /**
     * @param GetVpcOriginRequest $args
     * @return GetVpcOriginResponse
     */
    public function getVpcOrigin(GetVpcOriginRequest $args)
    {
        $result = parent::getVpcOrigin($args->toArray());
        return new GetVpcOriginResponse($result->toArray());
    }
}
