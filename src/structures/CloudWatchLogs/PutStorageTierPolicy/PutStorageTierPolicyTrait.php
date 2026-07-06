<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutStorageTierPolicy;

trait PutStorageTierPolicyTrait
{
    /**
     * @param PutStorageTierPolicyRequest $args
     * @return PutStorageTierPolicyResponse
     */
    public function putStorageTierPolicy(PutStorageTierPolicyRequest $args)
    {
        $result = parent::putStorageTierPolicy($args->toArray());
        return new PutStorageTierPolicyResponse($result->toArray());
    }
}
