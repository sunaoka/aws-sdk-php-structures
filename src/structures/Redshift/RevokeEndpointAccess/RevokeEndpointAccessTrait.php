<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeEndpointAccess;

trait RevokeEndpointAccessTrait
{
    /**
     * @param RevokeEndpointAccessRequest $args
     * @return RevokeEndpointAccessResponse
     */
    public function revokeEndpointAccess(RevokeEndpointAccessRequest $args)
    {
        $result = parent::revokeEndpointAccess($args->toArray());
        return new RevokeEndpointAccessResponse($result->toArray());
    }
}
