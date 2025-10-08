<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListProjectPolicies;

trait ListProjectPoliciesTrait
{
    /**
     * @param ListProjectPoliciesRequest $args
     * @return ListProjectPoliciesResponse
     */
    public function listProjectPolicies(ListProjectPoliciesRequest $args)
    {
        $result = parent::listProjectPolicies($args->toArray());
        return new ListProjectPoliciesResponse($result->toArray());
    }
}
