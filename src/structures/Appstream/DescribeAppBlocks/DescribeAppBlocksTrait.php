<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlocks;

trait DescribeAppBlocksTrait
{
    /**
     * @param DescribeAppBlocksRequest $args
     * @return DescribeAppBlocksResponse
     */
    public function describeAppBlocks(DescribeAppBlocksRequest $args)
    {
        $result = parent::describeAppBlocks($args->toArray());
        return new DescribeAppBlocksResponse($result->toArray());
    }
}
