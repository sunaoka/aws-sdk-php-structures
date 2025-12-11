<?php

namespace Sunaoka\Aws\Structures\Iam\AcceptDelegationRequest;

trait AcceptDelegationRequestTrait
{
    /**
     * @param AcceptDelegationRequestRequest $args
     * @return void
     */
    public function acceptDelegationRequest(AcceptDelegationRequestRequest $args)
    {
        parent::acceptDelegationRequest($args->toArray());
    }
}
