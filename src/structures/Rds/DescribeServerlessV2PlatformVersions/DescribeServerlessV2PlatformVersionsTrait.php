<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeServerlessV2PlatformVersions;

trait DescribeServerlessV2PlatformVersionsTrait
{
    /**
     * @param DescribeServerlessV2PlatformVersionsRequest $args
     * @return DescribeServerlessV2PlatformVersionsResponse
     */
    public function describeServerlessV2PlatformVersions(DescribeServerlessV2PlatformVersionsRequest $args)
    {
        $result = parent::describeServerlessV2PlatformVersions($args->toArray());
        return new DescribeServerlessV2PlatformVersionsResponse($result->toArray());
    }
}
