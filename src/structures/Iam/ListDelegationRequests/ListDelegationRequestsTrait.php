<?php

namespace Sunaoka\Aws\Structures\Iam\ListDelegationRequests;

trait ListDelegationRequestsTrait
{
    /**
     * @param ListDelegationRequestsRequest $args
     * @return ListDelegationRequestsResponse
     */
    public function listDelegationRequests(ListDelegationRequestsRequest $args)
    {
        $result = parent::listDelegationRequests($args->toArray());
        return new ListDelegationRequestsResponse($result->toArray());
    }
}
