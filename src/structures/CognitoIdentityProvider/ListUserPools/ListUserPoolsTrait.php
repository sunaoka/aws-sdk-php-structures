<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPools;

trait ListUserPoolsTrait
{
    /**
     * @param ListUserPoolsRequest $args
     * @return ListUserPoolsResponse
     */
    public function listUserPools(ListUserPoolsRequest $args)
    {
        $result = parent::listUserPools($args->toArray());
        return new ListUserPoolsResponse($result->toArray());
    }
}
