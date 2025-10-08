<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RevokeVpcEndpointAccess;

trait RevokeVpcEndpointAccessTrait
{
    /**
     * @param RevokeVpcEndpointAccessRequest $args
     * @return RevokeVpcEndpointAccessResponse
     */
    public function revokeVpcEndpointAccess(RevokeVpcEndpointAccessRequest $args)
    {
        $result = parent::revokeVpcEndpointAccess($args->toArray());
        return new RevokeVpcEndpointAccessResponse($result->toArray());
    }
}
