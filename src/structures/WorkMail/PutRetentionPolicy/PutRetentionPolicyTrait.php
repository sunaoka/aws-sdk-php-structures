<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutRetentionPolicy;

trait PutRetentionPolicyTrait
{
    /**
     * @param PutRetentionPolicyRequest $args
     * @return PutRetentionPolicyResponse
     */
    public function putRetentionPolicy(PutRetentionPolicyRequest $args)
    {
        $result = parent::putRetentionPolicy($args->toArray());
        return new PutRetentionPolicyResponse($result->toArray());
    }
}
