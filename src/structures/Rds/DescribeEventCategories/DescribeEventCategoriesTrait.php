<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeEventCategories;

trait DescribeEventCategoriesTrait
{
    /**
     * @param DescribeEventCategoriesRequest $args
     * @return DescribeEventCategoriesResponse
     */
    public function describeEventCategories(DescribeEventCategoriesRequest $args)
    {
        $result = parent::describeEventCategories($args->toArray());
        return new DescribeEventCategoriesResponse($result->toArray());
    }
}
