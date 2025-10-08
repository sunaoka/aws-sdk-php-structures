<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsCategories;

trait ListCallAnalyticsCategoriesTrait
{
    /**
     * @param ListCallAnalyticsCategoriesRequest $args
     * @return ListCallAnalyticsCategoriesResponse
     */
    public function listCallAnalyticsCategories(ListCallAnalyticsCategoriesRequest $args)
    {
        $result = parent::listCallAnalyticsCategories($args->toArray());
        return new ListCallAnalyticsCategoriesResponse($result->toArray());
    }
}
