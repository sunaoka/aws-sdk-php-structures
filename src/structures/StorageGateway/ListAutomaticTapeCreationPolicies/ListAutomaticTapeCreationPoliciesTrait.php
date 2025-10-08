<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListAutomaticTapeCreationPolicies;

trait ListAutomaticTapeCreationPoliciesTrait
{
    /**
     * @param ListAutomaticTapeCreationPoliciesRequest $args
     * @return ListAutomaticTapeCreationPoliciesResponse
     */
    public function listAutomaticTapeCreationPolicies(ListAutomaticTapeCreationPoliciesRequest $args)
    {
        $result = parent::listAutomaticTapeCreationPolicies($args->toArray());
        return new ListAutomaticTapeCreationPoliciesResponse($result->toArray());
    }
}
