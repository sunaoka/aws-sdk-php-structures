<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint;

trait DeleteVerifiedAccessEndpointTrait
{
    /**
     * @param DeleteVerifiedAccessEndpointRequest $args
     * @return DeleteVerifiedAccessEndpointResponse
     */
    public function deleteVerifiedAccessEndpoint(DeleteVerifiedAccessEndpointRequest $args)
    {
        $result = parent::deleteVerifiedAccessEndpoint($args->toArray());
        return new DeleteVerifiedAccessEndpointResponse($result->toArray());
    }
}
