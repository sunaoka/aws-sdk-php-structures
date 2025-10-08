<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListRecommendedIntents;

trait ListRecommendedIntentsTrait
{
    /**
     * @param ListRecommendedIntentsRequest $args
     * @return ListRecommendedIntentsResponse
     */
    public function listRecommendedIntents(ListRecommendedIntentsRequest $args)
    {
        $result = parent::listRecommendedIntents($args->toArray());
        return new ListRecommendedIntentsResponse($result->toArray());
    }
}
