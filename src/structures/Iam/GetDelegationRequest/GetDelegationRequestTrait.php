<?php

namespace Sunaoka\Aws\Structures\Iam\GetDelegationRequest;

trait GetDelegationRequestTrait
{
    /**
     * @param GetDelegationRequestRequest $args
     * @return GetDelegationRequestResponse
     */
    public function getDelegationRequest(GetDelegationRequestRequest $args)
    {
        $result = parent::getDelegationRequest($args->toArray());
        return new GetDelegationRequestResponse($result->toArray());
    }
}
