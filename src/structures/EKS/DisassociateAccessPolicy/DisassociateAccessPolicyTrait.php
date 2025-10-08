<?php

namespace Sunaoka\Aws\Structures\EKS\DisassociateAccessPolicy;

trait DisassociateAccessPolicyTrait
{
    /**
     * @param DisassociateAccessPolicyRequest $args
     * @return DisassociateAccessPolicyResponse
     */
    public function disassociateAccessPolicy(DisassociateAccessPolicyRequest $args)
    {
        $result = parent::disassociateAccessPolicy($args->toArray());
        return new DisassociateAccessPolicyResponse($result->toArray());
    }
}
