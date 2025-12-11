<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateDelegationRequest;

trait UpdateDelegationRequestTrait
{
    /**
     * @param UpdateDelegationRequestRequest $args
     * @return void
     */
    public function updateDelegationRequest(UpdateDelegationRequestRequest $args)
    {
        parent::updateDelegationRequest($args->toArray());
    }
}
