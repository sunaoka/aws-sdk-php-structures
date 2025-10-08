<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsCategory;

trait GetCallAnalyticsCategoryTrait
{
    /**
     * @param GetCallAnalyticsCategoryRequest $args
     * @return GetCallAnalyticsCategoryResponse
     */
    public function getCallAnalyticsCategory(GetCallAnalyticsCategoryRequest $args)
    {
        $result = parent::getCallAnalyticsCategory($args->toArray());
        return new GetCallAnalyticsCategoryResponse($result->toArray());
    }
}
