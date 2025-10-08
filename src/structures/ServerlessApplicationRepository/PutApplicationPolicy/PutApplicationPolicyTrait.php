<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\PutApplicationPolicy;

trait PutApplicationPolicyTrait
{
    /**
     * @param PutApplicationPolicyRequest $args
     * @return PutApplicationPolicyResponse
     */
    public function putApplicationPolicy(PutApplicationPolicyRequest $args)
    {
        $result = parent::putApplicationPolicy($args->toArray());
        return new PutApplicationPolicyResponse($result->toArray());
    }
}
