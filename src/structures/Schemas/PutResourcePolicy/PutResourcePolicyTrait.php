<?php

namespace Sunaoka\Aws\Structures\Schemas\PutResourcePolicy;

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
