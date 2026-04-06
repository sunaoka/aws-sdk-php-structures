<?php

namespace Sunaoka\Aws\Structures\Iam\RejectDelegationRequest;

trait RejectDelegationRequestTrait
{
    /**
     * @param RejectDelegationRequestRequest $args
     * @return void
     */
    public function rejectDelegationRequest(RejectDelegationRequestRequest $args)
    {
        parent::rejectDelegationRequest($args->toArray());
    }
}
