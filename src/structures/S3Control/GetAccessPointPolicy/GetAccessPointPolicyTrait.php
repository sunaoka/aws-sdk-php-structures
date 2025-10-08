<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointPolicy;

trait GetAccessPointPolicyTrait
{
    /**
     * @param GetAccessPointPolicyRequest $args
     * @return GetAccessPointPolicyResponse
     */
    public function getAccessPointPolicy(GetAccessPointPolicyRequest $args)
    {
        $result = parent::getAccessPointPolicy($args->toArray());
        return new GetAccessPointPolicyResponse($result->toArray());
    }
}
