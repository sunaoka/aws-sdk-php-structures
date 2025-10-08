<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeRuntimeVersions;

trait DescribeRuntimeVersionsTrait
{
    /**
     * @param DescribeRuntimeVersionsRequest $args
     * @return DescribeRuntimeVersionsResponse
     */
    public function describeRuntimeVersions(DescribeRuntimeVersionsRequest $args)
    {
        $result = parent::describeRuntimeVersions($args->toArray());
        return new DescribeRuntimeVersionsResponse($result->toArray());
    }
}
