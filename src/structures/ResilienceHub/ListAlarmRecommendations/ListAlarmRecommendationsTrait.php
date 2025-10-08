<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAlarmRecommendations;

trait ListAlarmRecommendationsTrait
{
    /**
     * @param ListAlarmRecommendationsRequest $args
     * @return ListAlarmRecommendationsResponse
     */
    public function listAlarmRecommendations(ListAlarmRecommendationsRequest $args)
    {
        $result = parent::listAlarmRecommendations($args->toArray());
        return new ListAlarmRecommendationsResponse($result->toArray());
    }
}
