<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMetricCategories;

trait DescribeMetricCategoriesTrait
{
    /**
     * @param DescribeMetricCategoriesRequest $args
     * @return DescribeMetricCategoriesResponse
     */
    public function describeMetricCategories(DescribeMetricCategoriesRequest $args)
    {
        $result = parent::describeMetricCategories($args->toArray());
        return new DescribeMetricCategoriesResponse($result->toArray());
    }
}
