<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateServiceAccessPolicies;

trait UpdateServiceAccessPoliciesTrait
{
    /**
     * @param UpdateServiceAccessPoliciesRequest $args
     * @return UpdateServiceAccessPoliciesResponse
     */
    public function updateServiceAccessPolicies(UpdateServiceAccessPoliciesRequest $args)
    {
        $result = parent::updateServiceAccessPolicies($args->toArray());
        return new UpdateServiceAccessPoliciesResponse($result->toArray());
    }
}
