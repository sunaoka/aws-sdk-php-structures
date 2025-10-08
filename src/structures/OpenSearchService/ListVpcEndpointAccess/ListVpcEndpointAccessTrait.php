<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListVpcEndpointAccess;

trait ListVpcEndpointAccessTrait
{
    /**
     * @param ListVpcEndpointAccessRequest $args
     * @return ListVpcEndpointAccessResponse
     */
    public function listVpcEndpointAccess(ListVpcEndpointAccessRequest $args)
    {
        $result = parent::listVpcEndpointAccess($args->toArray());
        return new ListVpcEndpointAccessResponse($result->toArray());
    }
}
