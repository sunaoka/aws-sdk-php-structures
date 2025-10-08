<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicyStore;

trait UpdatePolicyStoreTrait
{
    /**
     * @param UpdatePolicyStoreRequest $args
     * @return UpdatePolicyStoreResponse
     */
    public function updatePolicyStore(UpdatePolicyStoreRequest $args)
    {
        $result = parent::updatePolicyStore($args->toArray());
        return new UpdatePolicyStoreResponse($result->toArray());
    }
}
