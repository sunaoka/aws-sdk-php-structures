<?php

namespace Sunaoka\Aws\Structures\OAM\GetSinkPolicy;

trait GetSinkPolicyTrait
{
    /**
     * @param GetSinkPolicyRequest $args
     * @return GetSinkPolicyResponse
     */
    public function getSinkPolicy(GetSinkPolicyRequest $args)
    {
        $result = parent::getSinkPolicy($args->toArray());
        return new GetSinkPolicyResponse($result->toArray());
    }
}
