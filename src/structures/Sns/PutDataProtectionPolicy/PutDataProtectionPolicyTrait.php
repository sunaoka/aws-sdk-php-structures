<?php

namespace Sunaoka\Aws\Structures\Sns\PutDataProtectionPolicy;

trait PutDataProtectionPolicyTrait
{
    /**
     * @param PutDataProtectionPolicyRequest $args
     * @return void
     */
    public function putDataProtectionPolicy(PutDataProtectionPolicyRequest $args)
    {
        parent::putDataProtectionPolicy($args->toArray());
    }
}
