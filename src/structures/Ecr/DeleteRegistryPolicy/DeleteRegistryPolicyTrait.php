<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRegistryPolicy;

trait DeleteRegistryPolicyTrait
{
    /**
     * @param DeleteRegistryPolicyRequest $args
     * @return DeleteRegistryPolicyResponse
     */
    public function deleteRegistryPolicy(DeleteRegistryPolicyRequest $args)
    {
        $result = parent::deleteRegistryPolicy($args->toArray());
        return new DeleteRegistryPolicyResponse($result->toArray());
    }
}
