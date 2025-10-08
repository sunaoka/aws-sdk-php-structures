<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEventCategories;

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
