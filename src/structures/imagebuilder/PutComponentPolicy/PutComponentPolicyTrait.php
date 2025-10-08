<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutComponentPolicy;

trait PutComponentPolicyTrait
{
    /**
     * @param PutComponentPolicyRequest $args
     * @return PutComponentPolicyResponse
     */
    public function putComponentPolicy(PutComponentPolicyRequest $args)
    {
        $result = parent::putComponentPolicy($args->toArray());
        return new PutComponentPolicyResponse($result->toArray());
    }
}
