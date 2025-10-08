<?php

namespace Sunaoka\Aws\Structures\OAM\PutSinkPolicy;

trait PutSinkPolicyTrait
{
    /**
     * @param PutSinkPolicyRequest $args
     * @return PutSinkPolicyResponse
     */
    public function putSinkPolicy(PutSinkPolicyRequest $args)
    {
        $result = parent::putSinkPolicy($args->toArray());
        return new PutSinkPolicyResponse($result->toArray());
    }
}
