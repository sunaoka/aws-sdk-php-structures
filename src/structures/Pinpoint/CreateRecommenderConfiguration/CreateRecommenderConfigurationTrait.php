<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateRecommenderConfiguration;

trait CreateRecommenderConfigurationTrait
{
    /**
     * @param CreateRecommenderConfigurationRequest $args
     * @return CreateRecommenderConfigurationResponse
     */
    public function createRecommenderConfiguration(CreateRecommenderConfigurationRequest $args)
    {
        $result = parent::createRecommenderConfiguration($args->toArray());
        return new CreateRecommenderConfigurationResponse($result->toArray());
    }
}
