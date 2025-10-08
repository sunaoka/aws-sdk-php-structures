<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteAccessPolicy;

trait DeleteAccessPolicyTrait
{
    /**
     * @param DeleteAccessPolicyRequest $args
     * @return DeleteAccessPolicyResponse
     */
    public function deleteAccessPolicy(DeleteAccessPolicyRequest $args)
    {
        $result = parent::deleteAccessPolicy($args->toArray());
        return new DeleteAccessPolicyResponse($result->toArray());
    }
}
