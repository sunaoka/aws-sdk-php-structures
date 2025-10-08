<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData;

trait ListSessionAnalyticsDataTrait
{
    /**
     * @param ListSessionAnalyticsDataRequest $args
     * @return ListSessionAnalyticsDataResponse
     */
    public function listSessionAnalyticsData(ListSessionAnalyticsDataRequest $args)
    {
        $result = parent::listSessionAnalyticsData($args->toArray());
        return new ListSessionAnalyticsDataResponse($result->toArray());
    }
}
