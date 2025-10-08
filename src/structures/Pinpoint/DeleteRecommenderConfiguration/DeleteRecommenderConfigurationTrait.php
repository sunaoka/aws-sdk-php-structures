<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteRecommenderConfiguration;

trait DeleteRecommenderConfigurationTrait
{
    /**
     * @param DeleteRecommenderConfigurationRequest $args
     * @return DeleteRecommenderConfigurationResponse
     */
    public function deleteRecommenderConfiguration(DeleteRecommenderConfigurationRequest $args)
    {
        $result = parent::deleteRecommenderConfiguration($args->toArray());
        return new DeleteRecommenderConfigurationResponse($result->toArray());
    }
}
