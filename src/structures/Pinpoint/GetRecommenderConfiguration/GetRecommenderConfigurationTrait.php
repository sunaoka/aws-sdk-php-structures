<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfiguration;

trait GetRecommenderConfigurationTrait
{
    /**
     * @param GetRecommenderConfigurationRequest $args
     * @return GetRecommenderConfigurationResponse
     */
    public function getRecommenderConfiguration(GetRecommenderConfigurationRequest $args)
    {
        $result = parent::getRecommenderConfiguration($args->toArray());
        return new GetRecommenderConfigurationResponse($result->toArray());
    }
}
