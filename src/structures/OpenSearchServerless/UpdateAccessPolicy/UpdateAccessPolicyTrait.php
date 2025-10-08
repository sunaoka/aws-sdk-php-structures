<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateAccessPolicy;

trait UpdateAccessPolicyTrait
{
    /**
     * @param UpdateAccessPolicyRequest $args
     * @return UpdateAccessPolicyResponse
     */
    public function updateAccessPolicy(UpdateAccessPolicyRequest $args)
    {
        $result = parent::updateAccessPolicy($args->toArray());
        return new UpdateAccessPolicyResponse($result->toArray());
    }
}
