<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteRLSPolicy;

trait DeleteRLSPolicyTrait
{
    /**
     * @param DeleteRLSPolicyRequest $args
     * @return DeleteRLSPolicyResponse
     */
    public function deleteRLSPolicy(DeleteRLSPolicyRequest $args)
    {
        $result = parent::deleteRLSPolicy($args->toArray());
        return new DeleteRLSPolicyResponse($result->toArray());
    }
}
