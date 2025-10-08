<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeEndpointAccess;

trait AuthorizeEndpointAccessTrait
{
    /**
     * @param AuthorizeEndpointAccessRequest $args
     * @return AuthorizeEndpointAccessResponse
     */
    public function authorizeEndpointAccess(AuthorizeEndpointAccessRequest $args)
    {
        $result = parent::authorizeEndpointAccess($args->toArray());
        return new AuthorizeEndpointAccessResponse($result->toArray());
    }
}
