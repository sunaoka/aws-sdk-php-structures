<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendationItems;

trait ListAgentRecommendationItemsTrait
{
    /**
     * @param ListAgentRecommendationItemsRequest $args
     * @return ListAgentRecommendationItemsResponse
     */
    public function listAgentRecommendationItems(ListAgentRecommendationItemsRequest $args)
    {
        $result = parent::listAgentRecommendationItems($args->toArray());
        return new ListAgentRecommendationItemsResponse($result->toArray());
    }
}
