<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessPointPolicy;

trait DeleteAccessPointPolicyTrait
{
    /**
     * @param DeleteAccessPointPolicyRequest $args
     * @return void
     */
    public function deleteAccessPointPolicy(DeleteAccessPointPolicyRequest $args)
    {
        parent::deleteAccessPointPolicy($args->toArray());
    }
}
