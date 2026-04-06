<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAccessEntry;

trait DescribeAccessEntryTrait
{
    /**
     * @param DescribeAccessEntryRequest $args
     * @return DescribeAccessEntryResponse
     */
    public function describeAccessEntry(DescribeAccessEntryRequest $args)
    {
        $result = parent::describeAccessEntry($args->toArray());
        return new DescribeAccessEntryResponse($result->toArray());
    }
}
