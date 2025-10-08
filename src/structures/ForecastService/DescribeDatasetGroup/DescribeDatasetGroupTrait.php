<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetGroup;

trait DescribeDatasetGroupTrait
{
    /**
     * @param DescribeDatasetGroupRequest $args
     * @return DescribeDatasetGroupResponse
     */
    public function describeDatasetGroup(DescribeDatasetGroupRequest $args)
    {
        $result = parent::describeDatasetGroup($args->toArray());
        return new DescribeDatasetGroupResponse($result->toArray());
    }
}
