<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutAccountPolicy;

trait PutAccountPolicyTrait
{
    /**
     * @param PutAccountPolicyRequest $args
     * @return PutAccountPolicyResponse
     */
    public function putAccountPolicy(PutAccountPolicyRequest $args)
    {
        $result = parent::putAccountPolicy($args->toArray());
        return new PutAccountPolicyResponse($result->toArray());
    }
}
