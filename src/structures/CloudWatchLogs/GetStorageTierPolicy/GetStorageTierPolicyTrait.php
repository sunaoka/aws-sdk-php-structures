<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetStorageTierPolicy;

trait GetStorageTierPolicyTrait
{
    /**
     * @param GetStorageTierPolicyRequest $args
     * @return GetStorageTierPolicyResponse
     */
    public function getStorageTierPolicy(GetStorageTierPolicyRequest $args)
    {
        $result = parent::getStorageTierPolicy($args->toArray());
        return new GetStorageTierPolicyResponse($result->toArray());
    }
}
