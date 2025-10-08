<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandards;

trait DescribeStandardsTrait
{
    /**
     * @param DescribeStandardsRequest $args
     * @return DescribeStandardsResponse
     */
    public function describeStandards(DescribeStandardsRequest $args)
    {
        $result = parent::describeStandards($args->toArray());
        return new DescribeStandardsResponse($result->toArray());
    }
}
