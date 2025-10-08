<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetDefaultRetentionPolicy;

trait GetDefaultRetentionPolicyTrait
{
    /**
     * @param GetDefaultRetentionPolicyRequest $args
     * @return GetDefaultRetentionPolicyResponse
     */
    public function getDefaultRetentionPolicy(GetDefaultRetentionPolicyRequest $args)
    {
        $result = parent::getDefaultRetentionPolicy($args->toArray());
        return new GetDefaultRetentionPolicyResponse($result->toArray());
    }
}
