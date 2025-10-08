<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet;

trait DescribeDataSetTrait
{
    /**
     * @param DescribeDataSetRequest $args
     * @return DescribeDataSetResponse
     */
    public function describeDataSet(DescribeDataSetRequest $args)
    {
        $result = parent::describeDataSet($args->toArray());
        return new DescribeDataSetResponse($result->toArray());
    }
}
