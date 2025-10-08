<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeOpsItems;

trait DescribeOpsItemsTrait
{
    /**
     * @param DescribeOpsItemsRequest $args
     * @return DescribeOpsItemsResponse
     */
    public function describeOpsItems(DescribeOpsItemsRequest $args)
    {
        $result = parent::describeOpsItems($args->toArray());
        return new DescribeOpsItemsResponse($result->toArray());
    }
}
