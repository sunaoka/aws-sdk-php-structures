<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData;

trait ListUtteranceAnalyticsDataTrait
{
    /**
     * @param ListUtteranceAnalyticsDataRequest $args
     * @return ListUtteranceAnalyticsDataResponse
     */
    public function listUtteranceAnalyticsData(ListUtteranceAnalyticsDataRequest $args)
    {
        $result = parent::listUtteranceAnalyticsData($args->toArray());
        return new ListUtteranceAnalyticsDataResponse($result->toArray());
    }
}
