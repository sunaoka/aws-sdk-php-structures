<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutContainerPolicy;

trait PutContainerPolicyTrait
{
    /**
     * @param PutContainerPolicyRequest $args
     * @return PutContainerPolicyResponse
     */
    public function putContainerPolicy(PutContainerPolicyRequest $args)
    {
        $result = parent::putContainerPolicy($args->toArray());
        return new PutContainerPolicyResponse($result->toArray());
    }
}
