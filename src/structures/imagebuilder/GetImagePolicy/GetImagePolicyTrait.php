<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePolicy;

trait GetImagePolicyTrait
{
    /**
     * @param GetImagePolicyRequest $args
     * @return GetImagePolicyResponse
     */
    public function getImagePolicy(GetImagePolicyRequest $args)
    {
        $result = parent::getImagePolicy($args->toArray());
        return new GetImagePolicyResponse($result->toArray());
    }
}
