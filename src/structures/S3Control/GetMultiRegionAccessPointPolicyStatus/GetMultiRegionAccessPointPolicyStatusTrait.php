<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointPolicyStatus;

trait GetMultiRegionAccessPointPolicyStatusTrait
{
    /**
     * @param GetMultiRegionAccessPointPolicyStatusRequest $args
     * @return GetMultiRegionAccessPointPolicyStatusResponse
     */
    public function getMultiRegionAccessPointPolicyStatus(GetMultiRegionAccessPointPolicyStatusRequest $args)
    {
        $result = parent::getMultiRegionAccessPointPolicyStatus($args->toArray());
        return new GetMultiRegionAccessPointPolicyStatusResponse($result->toArray());
    }
}
