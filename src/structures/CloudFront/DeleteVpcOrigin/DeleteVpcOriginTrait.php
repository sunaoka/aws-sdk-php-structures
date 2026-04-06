<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteVpcOrigin;

trait DeleteVpcOriginTrait
{
    /**
     * @param DeleteVpcOriginRequest $args
     * @return DeleteVpcOriginResponse
     */
    public function deleteVpcOrigin(DeleteVpcOriginRequest $args)
    {
        $result = parent::deleteVpcOrigin($args->toArray());
        return new DeleteVpcOriginResponse($result->toArray());
    }
}
