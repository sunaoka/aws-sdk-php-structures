<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDataProtectionPolicy;

trait PutDataProtectionPolicyTrait
{
    /**
     * @param PutDataProtectionPolicyRequest $args
     * @return PutDataProtectionPolicyResponse
     */
    public function putDataProtectionPolicy(PutDataProtectionPolicyRequest $args)
    {
        $result = parent::putDataProtectionPolicy($args->toArray());
        return new PutDataProtectionPolicyResponse($result->toArray());
    }
}
