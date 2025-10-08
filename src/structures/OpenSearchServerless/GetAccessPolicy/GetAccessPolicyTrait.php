<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetAccessPolicy;

trait GetAccessPolicyTrait
{
    /**
     * @param GetAccessPolicyRequest $args
     * @return GetAccessPolicyResponse
     */
    public function getAccessPolicy(GetAccessPolicyRequest $args)
    {
        $result = parent::getAccessPolicy($args->toArray());
        return new GetAccessPolicyResponse($result->toArray());
    }
}
