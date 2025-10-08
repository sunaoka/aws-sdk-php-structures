<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDataProtectionPolicy;

trait GetDataProtectionPolicyTrait
{
    /**
     * @param GetDataProtectionPolicyRequest $args
     * @return GetDataProtectionPolicyResponse
     */
    public function getDataProtectionPolicy(GetDataProtectionPolicyRequest $args)
    {
        $result = parent::getDataProtectionPolicy($args->toArray());
        return new GetDataProtectionPolicyResponse($result->toArray());
    }
}
