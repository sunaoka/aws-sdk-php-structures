<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectPolicies;

trait ListObjectPoliciesTrait
{
    /**
     * @param ListObjectPoliciesRequest $args
     * @return ListObjectPoliciesResponse
     */
    public function listObjectPolicies(ListObjectPoliciesRequest $args)
    {
        $result = parent::listObjectPolicies($args->toArray());
        return new ListObjectPoliciesResponse($result->toArray());
    }
}
