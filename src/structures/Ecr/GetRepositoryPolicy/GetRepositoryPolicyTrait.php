<?php

namespace Sunaoka\Aws\Structures\Ecr\GetRepositoryPolicy;

trait GetRepositoryPolicyTrait
{
    /**
     * @param GetRepositoryPolicyRequest $args
     * @return GetRepositoryPolicyResponse
     */
    public function getRepositoryPolicy(GetRepositoryPolicyRequest $args)
    {
        $result = parent::getRepositoryPolicy($args->toArray());
        return new GetRepositoryPolicyResponse($result->toArray());
    }
}
