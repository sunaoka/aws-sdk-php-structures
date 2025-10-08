<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerDetails;

trait GetServerDetailsTrait
{
    /**
     * @param GetServerDetailsRequest $args
     * @return GetServerDetailsResponse
     */
    public function getServerDetails(GetServerDetailsRequest $args)
    {
        $result = parent::getServerDetails($args->toArray());
        return new GetServerDetailsResponse($result->toArray());
    }
}
