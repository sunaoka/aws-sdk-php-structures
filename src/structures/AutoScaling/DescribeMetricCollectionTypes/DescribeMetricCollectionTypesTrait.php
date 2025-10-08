<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeMetricCollectionTypes;

trait DescribeMetricCollectionTypesTrait
{
    /**
     * @return DescribeMetricCollectionTypesResponse
     */
    public function describeMetricCollectionTypes()
    {
        $result = parent::describeMetricCollectionTypes();
        return new DescribeMetricCollectionTypesResponse($result->toArray());
    }
}
