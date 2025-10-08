<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetContainerPolicy;

trait GetContainerPolicyTrait
{
    /**
     * @param GetContainerPolicyRequest $args
     * @return GetContainerPolicyResponse
     */
    public function getContainerPolicy(GetContainerPolicyRequest $args)
    {
        $result = parent::getContainerPolicy($args->toArray());
        return new GetContainerPolicyResponse($result->toArray());
    }
}
