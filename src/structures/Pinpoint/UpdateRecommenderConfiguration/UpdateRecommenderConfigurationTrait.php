<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateRecommenderConfiguration;

trait UpdateRecommenderConfigurationTrait
{
    /**
     * @param UpdateRecommenderConfigurationRequest $args
     * @return UpdateRecommenderConfigurationResponse
     */
    public function updateRecommenderConfiguration(UpdateRecommenderConfigurationRequest $args)
    {
        $result = parent::updateRecommenderConfiguration($args->toArray());
        return new UpdateRecommenderConfigurationResponse($result->toArray());
    }
}
