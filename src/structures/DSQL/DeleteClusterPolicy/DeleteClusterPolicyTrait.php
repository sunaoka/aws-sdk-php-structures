<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteClusterPolicy;

trait DeleteClusterPolicyTrait
{
    /**
     * @param DeleteClusterPolicyRequest $args
     * @return DeleteClusterPolicyResponse
     */
    public function deleteClusterPolicy(DeleteClusterPolicyRequest $args)
    {
        $result = parent::deleteClusterPolicy($args->toArray());
        return new DeleteClusterPolicyResponse($result->toArray());
    }
}
