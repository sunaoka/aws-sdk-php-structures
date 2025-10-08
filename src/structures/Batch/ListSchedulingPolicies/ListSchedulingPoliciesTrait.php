<?php

namespace Sunaoka\Aws\Structures\Batch\ListSchedulingPolicies;

trait ListSchedulingPoliciesTrait
{
    /**
     * @param ListSchedulingPoliciesRequest $args
     * @return ListSchedulingPoliciesResponse
     */
    public function listSchedulingPolicies(ListSchedulingPoliciesRequest $args)
    {
        $result = parent::listSchedulingPolicies($args->toArray());
        return new ListSchedulingPoliciesResponse($result->toArray());
    }
}
