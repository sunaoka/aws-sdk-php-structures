<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteResourcePolicy;

trait DeleteResourcePolicyTrait
{
    /**
     * @param DeleteResourcePolicyRequest $args
     * @return DeleteResourcePolicyResponse
     */
    public function deleteResourcePolicy(DeleteResourcePolicyRequest $args)
    {
        $result = parent::deleteResourcePolicy($args->toArray());
        return new DeleteResourcePolicyResponse($result->toArray());
    }
}
