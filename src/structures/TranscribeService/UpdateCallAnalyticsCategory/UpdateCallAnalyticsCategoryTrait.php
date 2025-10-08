<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateCallAnalyticsCategory;

trait UpdateCallAnalyticsCategoryTrait
{
    /**
     * @param UpdateCallAnalyticsCategoryRequest $args
     * @return UpdateCallAnalyticsCategoryResponse
     */
    public function updateCallAnalyticsCategory(UpdateCallAnalyticsCategoryRequest $args)
    {
        $result = parent::updateCallAnalyticsCategory($args->toArray());
        return new UpdateCallAnalyticsCategoryResponse($result->toArray());
    }
}
