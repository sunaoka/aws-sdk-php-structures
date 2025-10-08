<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteAuthPolicy;

trait DeleteAuthPolicyTrait
{
    /**
     * @param DeleteAuthPolicyRequest $args
     * @return DeleteAuthPolicyResponse
     */
    public function deleteAuthPolicy(DeleteAuthPolicyRequest $args)
    {
        $result = parent::deleteAuthPolicy($args->toArray());
        return new DeleteAuthPolicyResponse($result->toArray());
    }
}
