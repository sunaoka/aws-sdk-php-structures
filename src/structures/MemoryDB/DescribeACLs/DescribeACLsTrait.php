<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeACLs;

trait DescribeACLsTrait
{
    /**
     * @param DescribeACLsRequest $args
     * @return DescribeACLsResponse
     */
    public function describeACLs(DescribeACLsRequest $args)
    {
        $result = parent::describeACLs($args->toArray());
        return new DescribeACLsResponse($result->toArray());
    }
}
