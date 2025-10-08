<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails;

trait GetApplicationComponentDetailsTrait
{
    /**
     * @param GetApplicationComponentDetailsRequest $args
     * @return GetApplicationComponentDetailsResponse
     */
    public function getApplicationComponentDetails(GetApplicationComponentDetailsRequest $args)
    {
        $result = parent::getApplicationComponentDetails($args->toArray());
        return new GetApplicationComponentDetailsResponse($result->toArray());
    }
}
