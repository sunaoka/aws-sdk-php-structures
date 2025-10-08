<?php

namespace Sunaoka\Aws\Structures\S3Control\PutMultiRegionAccessPointPolicy;

trait PutMultiRegionAccessPointPolicyTrait
{
    /**
     * @param PutMultiRegionAccessPointPolicyRequest $args
     * @return PutMultiRegionAccessPointPolicyResponse
     */
    public function putMultiRegionAccessPointPolicy(PutMultiRegionAccessPointPolicyRequest $args)
    {
        $result = parent::putMultiRegionAccessPointPolicy($args->toArray());
        return new PutMultiRegionAccessPointPolicyResponse($result->toArray());
    }
}
