<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfigurations;

trait GetRecommenderConfigurationsTrait
{
    /**
     * @param GetRecommenderConfigurationsRequest $args
     * @return GetRecommenderConfigurationsResponse
     */
    public function getRecommenderConfigurations(GetRecommenderConfigurationsRequest $args)
    {
        $result = parent::getRecommenderConfigurations($args->toArray());
        return new GetRecommenderConfigurationsResponse($result->toArray());
    }
}
