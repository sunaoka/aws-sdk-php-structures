<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteResourcePolicy;

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
