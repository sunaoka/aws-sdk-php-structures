<?php

namespace Sunaoka\Aws\Structures\Iam\AssociateDelegationRequest;

trait AssociateDelegationRequestTrait
{
    /**
     * @param AssociateDelegationRequestRequest $args
     * @return void
     */
    public function associateDelegationRequest(AssociateDelegationRequestRequest $args)
    {
        parent::associateDelegationRequest($args->toArray());
    }
}
