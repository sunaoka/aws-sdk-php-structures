<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStore;

trait GetPolicyStoreTrait
{
    /**
     * @param GetPolicyStoreRequest $args
     * @return GetPolicyStoreResponse
     */
    public function getPolicyStore(GetPolicyStoreRequest $args)
    {
        $result = parent::getPolicyStore($args->toArray());
        return new GetPolicyStoreResponse($result->toArray());
    }
}
