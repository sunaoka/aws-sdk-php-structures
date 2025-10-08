<?php

namespace Sunaoka\Aws\Structures\Kms\PutKeyPolicy;

trait PutKeyPolicyTrait
{
    /**
     * @param PutKeyPolicyRequest $args
     * @return void
     */
    public function putKeyPolicy(PutKeyPolicyRequest $args)
    {
        parent::putKeyPolicy($args->toArray());
    }
}
