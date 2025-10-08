<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies;

trait ListAccessPoliciesTrait
{
    /**
     * @param ListAccessPoliciesRequest $args
     * @return ListAccessPoliciesResponse
     */
    public function listAccessPolicies(ListAccessPoliciesRequest $args)
    {
        $result = parent::listAccessPolicies($args->toArray());
        return new ListAccessPoliciesResponse($result->toArray());
    }
}
