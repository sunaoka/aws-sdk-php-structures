<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRaidArrays;

trait DescribeRaidArraysTrait
{
    /**
     * @param DescribeRaidArraysRequest $args
     * @return DescribeRaidArraysResponse
     */
    public function describeRaidArrays(DescribeRaidArraysRequest $args)
    {
        $result = parent::describeRaidArrays($args->toArray());
        return new DescribeRaidArraysResponse($result->toArray());
    }
}
