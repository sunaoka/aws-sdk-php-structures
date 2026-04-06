<?php

namespace Sunaoka\Aws\Structures\Iam\CreateDelegationRequest;

trait CreateDelegationRequestTrait
{
    /**
     * @param CreateDelegationRequestRequest $args
     * @return CreateDelegationRequestResponse
     */
    public function createDelegationRequest(CreateDelegationRequestRequest $args)
    {
        $result = parent::createDelegationRequest($args->toArray());
        return new CreateDelegationRequestResponse($result->toArray());
    }
}
