<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRepositoryPolicy;

trait DeleteRepositoryPolicyTrait
{
    /**
     * @param DeleteRepositoryPolicyRequest $args
     * @return DeleteRepositoryPolicyResponse
     */
    public function deleteRepositoryPolicy(DeleteRepositoryPolicyRequest $args)
    {
        $result = parent::deleteRepositoryPolicy($args->toArray());
        return new DeleteRepositoryPolicyResponse($result->toArray());
    }
}
