<?php

namespace Sunaoka\Aws\Structures\S3Control\PutAccessGrantsInstanceResourcePolicy;

trait PutAccessGrantsInstanceResourcePolicyTrait
{
    /**
     * @param PutAccessGrantsInstanceResourcePolicyRequest $args
     * @return PutAccessGrantsInstanceResourcePolicyResponse
     */
    public function putAccessGrantsInstanceResourcePolicy(PutAccessGrantsInstanceResourcePolicyRequest $args)
    {
        $result = parent::putAccessGrantsInstanceResourcePolicy($args->toArray());
        return new PutAccessGrantsInstanceResourcePolicyResponse($result->toArray());
    }
}
