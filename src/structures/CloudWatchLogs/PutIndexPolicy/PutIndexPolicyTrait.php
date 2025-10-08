<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIndexPolicy;

trait PutIndexPolicyTrait
{
    /**
     * @param PutIndexPolicyRequest $args
     * @return PutIndexPolicyResponse
     */
    public function putIndexPolicy(PutIndexPolicyRequest $args)
    {
        $result = parent::putIndexPolicy($args->toArray());
        return new PutIndexPolicyResponse($result->toArray());
    }
}
