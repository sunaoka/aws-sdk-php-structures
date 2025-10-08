<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListFeatures;

trait ListFeaturesTrait
{
    /**
     * @param ListFeaturesRequest $args
     * @return ListFeaturesResponse
     */
    public function listFeatures(ListFeaturesRequest $args)
    {
        $result = parent::listFeatures($args->toArray());
        return new ListFeaturesResponse($result->toArray());
    }
}
