<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentityPools;

trait ListIdentityPoolsTrait
{
    /**
     * @param ListIdentityPoolsRequest $args
     * @return ListIdentityPoolsResponse
     */
    public function listIdentityPools(ListIdentityPoolsRequest $args)
    {
        $result = parent::listIdentityPools($args->toArray());
        return new ListIdentityPoolsResponse($result->toArray());
    }
}
