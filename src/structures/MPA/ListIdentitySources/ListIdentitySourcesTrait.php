<?php

namespace Sunaoka\Aws\Structures\MPA\ListIdentitySources;

trait ListIdentitySourcesTrait
{
    /**
     * @param ListIdentitySourcesRequest $args
     * @return ListIdentitySourcesResponse
     */
    public function listIdentitySources(ListIdentitySourcesRequest $args)
    {
        $result = parent::listIdentitySources($args->toArray());
        return new ListIdentitySourcesResponse($result->toArray());
    }
}
