<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateVpcOrigin;

trait UpdateVpcOriginTrait
{
    /**
     * @param UpdateVpcOriginRequest $args
     * @return UpdateVpcOriginResponse
     */
    public function updateVpcOrigin(UpdateVpcOriginRequest $args)
    {
        $result = parent::updateVpcOrigin($args->toArray());
        return new UpdateVpcOriginResponse($result->toArray());
    }
}
