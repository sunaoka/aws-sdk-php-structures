<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotRecommendations;

trait ListBotRecommendationsTrait
{
    /**
     * @param ListBotRecommendationsRequest $args
     * @return ListBotRecommendationsResponse
     */
    public function listBotRecommendations(ListBotRecommendationsRequest $args)
    {
        $result = parent::listBotRecommendations($args->toArray());
        return new ListBotRecommendationsResponse($result->toArray());
    }
}
