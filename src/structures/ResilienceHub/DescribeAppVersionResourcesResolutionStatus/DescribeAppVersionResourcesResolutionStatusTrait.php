<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionResourcesResolutionStatus;

trait DescribeAppVersionResourcesResolutionStatusTrait
{
    /**
     * @param DescribeAppVersionResourcesResolutionStatusRequest $args
     * @return DescribeAppVersionResourcesResolutionStatusResponse
     */
    public function describeAppVersionResourcesResolutionStatus(
        DescribeAppVersionResourcesResolutionStatusRequest $args,
    ) {
        $result = parent::describeAppVersionResourcesResolutionStatus($args->toArray());
        return new DescribeAppVersionResourcesResolutionStatusResponse($result->toArray());
    }
}
