<?php

namespace Sunaoka\Aws\Structures\DSQL\GetClusterPolicy;

trait GetClusterPolicyTrait
{
    /**
     * @param GetClusterPolicyRequest $args
     * @return GetClusterPolicyResponse
     */
    public function getClusterPolicy(GetClusterPolicyRequest $args)
    {
        $result = parent::getClusterPolicy($args->toArray());
        return new GetClusterPolicyResponse($result->toArray());
    }
}
