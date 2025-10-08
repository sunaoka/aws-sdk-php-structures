<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutResourcePolicy;

trait PutResourcePolicyTrait
{
    /**
     * @param PutResourcePolicyRequest $args
     * @return PutResourcePolicyResponse
     */
    public function putResourcePolicy(PutResourcePolicyRequest $args)
    {
        $result = parent::putResourcePolicy($args->toArray());
        return new PutResourcePolicyResponse($result->toArray());
    }
}
