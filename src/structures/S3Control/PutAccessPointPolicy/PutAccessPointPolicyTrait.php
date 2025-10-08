<?php

namespace Sunaoka\Aws\Structures\S3Control\PutAccessPointPolicy;

trait PutAccessPointPolicyTrait
{
    /**
     * @param PutAccessPointPolicyRequest $args
     * @return void
     */
    public function putAccessPointPolicy(PutAccessPointPolicyRequest $args)
    {
        parent::putAccessPointPolicy($args->toArray());
    }
}
