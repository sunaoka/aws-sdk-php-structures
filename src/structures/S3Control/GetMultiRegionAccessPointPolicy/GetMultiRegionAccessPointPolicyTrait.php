<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointPolicy;

trait GetMultiRegionAccessPointPolicyTrait
{
    /**
     * @param GetMultiRegionAccessPointPolicyRequest $args
     * @return GetMultiRegionAccessPointPolicyResponse
     */
    public function getMultiRegionAccessPointPolicy(GetMultiRegionAccessPointPolicyRequest $args)
    {
        $result = parent::getMultiRegionAccessPointPolicy($args->toArray());
        return new GetMultiRegionAccessPointPolicyResponse($result->toArray());
    }
}
