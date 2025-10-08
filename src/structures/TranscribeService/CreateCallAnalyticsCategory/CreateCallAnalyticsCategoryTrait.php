<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory;

trait CreateCallAnalyticsCategoryTrait
{
    /**
     * @param CreateCallAnalyticsCategoryRequest $args
     * @return CreateCallAnalyticsCategoryResponse
     */
    public function createCallAnalyticsCategory(CreateCallAnalyticsCategoryRequest $args)
    {
        $result = parent::createCallAnalyticsCategory($args->toArray());
        return new CreateCallAnalyticsCategoryResponse($result->toArray());
    }
}
