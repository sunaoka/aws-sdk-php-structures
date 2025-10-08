<?php

namespace Sunaoka\Aws\Structures\Iot\ListAttachedPolicies;

trait ListAttachedPoliciesTrait
{
    /**
     * @param ListAttachedPoliciesRequest $args
     * @return ListAttachedPoliciesResponse
     */
    public function listAttachedPolicies(ListAttachedPoliciesRequest $args)
    {
        $result = parent::listAttachedPolicies($args->toArray());
        return new ListAttachedPoliciesResponse($result->toArray());
    }
}
