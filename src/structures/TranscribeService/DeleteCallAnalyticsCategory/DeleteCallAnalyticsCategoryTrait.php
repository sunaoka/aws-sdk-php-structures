<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteCallAnalyticsCategory;

trait DeleteCallAnalyticsCategoryTrait
{
    /**
     * @param DeleteCallAnalyticsCategoryRequest $args
     * @return DeleteCallAnalyticsCategoryResponse
     */
    public function deleteCallAnalyticsCategory(DeleteCallAnalyticsCategoryRequest $args)
    {
        $result = parent::deleteCallAnalyticsCategory($args->toArray());
        return new DeleteCallAnalyticsCategoryResponse($result->toArray());
    }
}
