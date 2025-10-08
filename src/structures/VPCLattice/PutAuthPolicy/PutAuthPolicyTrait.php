<?php

namespace Sunaoka\Aws\Structures\VPCLattice\PutAuthPolicy;

trait PutAuthPolicyTrait
{
    /**
     * @param PutAuthPolicyRequest $args
     * @return PutAuthPolicyResponse
     */
    public function putAuthPolicy(PutAuthPolicyRequest $args)
    {
        $result = parent::putAuthPolicy($args->toArray());
        return new PutAuthPolicyResponse($result->toArray());
    }
}
