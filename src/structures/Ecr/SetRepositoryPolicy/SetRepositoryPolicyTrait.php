<?php

namespace Sunaoka\Aws\Structures\Ecr\SetRepositoryPolicy;

trait SetRepositoryPolicyTrait
{
    /**
     * @param SetRepositoryPolicyRequest $args
     * @return SetRepositoryPolicyResponse
     */
    public function setRepositoryPolicy(SetRepositoryPolicyRequest $args)
    {
        $result = parent::setRepositoryPolicy($args->toArray());
        return new SetRepositoryPolicyResponse($result->toArray());
    }
}
