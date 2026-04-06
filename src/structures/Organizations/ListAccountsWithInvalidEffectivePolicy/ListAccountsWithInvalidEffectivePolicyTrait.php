<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAccountsWithInvalidEffectivePolicy;

trait ListAccountsWithInvalidEffectivePolicyTrait
{
    /**
     * @param ListAccountsWithInvalidEffectivePolicyRequest $args
     * @return ListAccountsWithInvalidEffectivePolicyResponse
     */
    public function listAccountsWithInvalidEffectivePolicy(ListAccountsWithInvalidEffectivePolicyRequest $args)
    {
        $result = parent::listAccountsWithInvalidEffectivePolicy($args->toArray());
        return new ListAccountsWithInvalidEffectivePolicyResponse($result->toArray());
    }
}
