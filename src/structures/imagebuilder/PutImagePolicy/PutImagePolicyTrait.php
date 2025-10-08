<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutImagePolicy;

trait PutImagePolicyTrait
{
    /**
     * @param PutImagePolicyRequest $args
     * @return PutImagePolicyResponse
     */
    public function putImagePolicy(PutImagePolicyRequest $args)
    {
        $result = parent::putImagePolicy($args->toArray());
        return new PutImagePolicyResponse($result->toArray());
    }
}
