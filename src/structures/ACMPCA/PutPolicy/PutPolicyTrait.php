<?php

namespace Sunaoka\Aws\Structures\ACMPCA\PutPolicy;

trait PutPolicyTrait
{
    /**
     * @param PutPolicyRequest $args
     * @return void
     */
    public function putPolicy(PutPolicyRequest $args)
    {
        parent::putPolicy($args->toArray());
    }
}
