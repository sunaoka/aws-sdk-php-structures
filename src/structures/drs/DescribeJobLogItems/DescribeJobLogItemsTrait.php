<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems;

trait DescribeJobLogItemsTrait
{
    /**
     * @param DescribeJobLogItemsRequest $args
     * @return DescribeJobLogItemsResponse
     */
    public function describeJobLogItems(DescribeJobLogItemsRequest $args)
    {
        $result = parent::describeJobLogItems($args->toArray());
        return new DescribeJobLogItemsResponse($result->toArray());
    }
}
