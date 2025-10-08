<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrantsInstanceResourcePolicy;

trait GetAccessGrantsInstanceResourcePolicyTrait
{
    /**
     * @param GetAccessGrantsInstanceResourcePolicyRequest $args
     * @return GetAccessGrantsInstanceResourcePolicyResponse
     */
    public function getAccessGrantsInstanceResourcePolicy(GetAccessGrantsInstanceResourcePolicyRequest $args)
    {
        $result = parent::getAccessGrantsInstanceResourcePolicy($args->toArray());
        return new GetAccessGrantsInstanceResourcePolicyResponse($result->toArray());
    }
}
