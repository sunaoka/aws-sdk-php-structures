<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\AuthorizeVpcEndpointAccess;

trait AuthorizeVpcEndpointAccessTrait
{
    /**
     * @param AuthorizeVpcEndpointAccessRequest $args
     * @return AuthorizeVpcEndpointAccessResponse
     */
    public function authorizeVpcEndpointAccess(AuthorizeVpcEndpointAccessRequest $args)
    {
        $result = parent::authorizeVpcEndpointAccess($args->toArray());
        return new AuthorizeVpcEndpointAccessResponse($result->toArray());
    }
}
