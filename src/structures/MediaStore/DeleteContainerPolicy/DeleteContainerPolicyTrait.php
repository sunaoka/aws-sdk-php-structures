<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteContainerPolicy;

trait DeleteContainerPolicyTrait
{
    /**
     * @param DeleteContainerPolicyRequest $args
     * @return DeleteContainerPolicyResponse
     */
    public function deleteContainerPolicy(DeleteContainerPolicyRequest $args)
    {
        $result = parent::deleteContainerPolicy($args->toArray());
        return new DeleteContainerPolicyResponse($result->toArray());
    }
}
