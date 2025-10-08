<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicyStore;

trait DeletePolicyStoreTrait
{
    /**
     * @param DeletePolicyStoreRequest $args
     * @return DeletePolicyStoreResponse
     */
    public function deletePolicyStore(DeletePolicyStoreRequest $args)
    {
        $result = parent::deletePolicyStore($args->toArray());
        return new DeletePolicyStoreResponse($result->toArray());
    }
}
