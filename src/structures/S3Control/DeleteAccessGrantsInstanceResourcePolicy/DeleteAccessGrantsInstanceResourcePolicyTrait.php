<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessGrantsInstanceResourcePolicy;

trait DeleteAccessGrantsInstanceResourcePolicyTrait
{
    /**
     * @param DeleteAccessGrantsInstanceResourcePolicyRequest $args
     * @return void
     */
    public function deleteAccessGrantsInstanceResourcePolicy(DeleteAccessGrantsInstanceResourcePolicyRequest $args)
    {
        parent::deleteAccessGrantsInstanceResourcePolicy($args->toArray());
    }
}
