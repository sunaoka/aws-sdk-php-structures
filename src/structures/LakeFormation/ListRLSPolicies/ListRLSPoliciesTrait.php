<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListRLSPolicies;

trait ListRLSPoliciesTrait
{
    /**
     * @param ListRLSPoliciesRequest $args
     * @return ListRLSPoliciesResponse
     */
    public function listRLSPolicies(ListRLSPoliciesRequest $args)
    {
        $result = parent::listRLSPolicies($args->toArray());
        return new ListRLSPoliciesResponse($result->toArray());
    }
}
