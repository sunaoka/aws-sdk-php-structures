<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyPolicies;

trait ListKeyPoliciesTrait
{
    /**
     * @param ListKeyPoliciesRequest $args
     * @return ListKeyPoliciesResponse
     */
    public function listKeyPolicies(ListKeyPoliciesRequest $args)
    {
        $result = parent::listKeyPolicies($args->toArray());
        return new ListKeyPoliciesResponse($result->toArray());
    }
}
