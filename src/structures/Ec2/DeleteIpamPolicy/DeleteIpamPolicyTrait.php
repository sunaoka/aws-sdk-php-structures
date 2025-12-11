<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPolicy;

trait DeleteIpamPolicyTrait
{
    /**
     * @param DeleteIpamPolicyRequest $args
     * @return DeleteIpamPolicyResponse
     */
    public function deleteIpamPolicy(DeleteIpamPolicyRequest $args)
    {
        $result = parent::deleteIpamPolicy($args->toArray());
        return new DeleteIpamPolicyResponse($result->toArray());
    }
}
