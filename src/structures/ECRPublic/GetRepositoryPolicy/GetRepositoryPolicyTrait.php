<?php

namespace Sunaoka\Aws\Structures\ECRPublic\GetRepositoryPolicy;

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
