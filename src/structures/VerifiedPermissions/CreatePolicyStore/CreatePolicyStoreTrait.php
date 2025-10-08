<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStore;

trait CreatePolicyStoreTrait
{
    /**
     * @param CreatePolicyStoreRequest $args
     * @return CreatePolicyStoreResponse
     */
    public function createPolicyStore(CreatePolicyStoreRequest $args)
    {
        $result = parent::createPolicyStore($args->toArray());
        return new CreatePolicyStoreResponse($result->toArray());
    }
}
