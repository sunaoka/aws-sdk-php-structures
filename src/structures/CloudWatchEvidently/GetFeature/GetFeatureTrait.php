<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetFeature;

trait GetFeatureTrait
{
    /**
     * @param GetFeatureRequest $args
     * @return GetFeatureResponse
     */
    public function getFeature(GetFeatureRequest $args)
    {
        $result = parent::getFeature($args->toArray());
        return new GetFeatureResponse($result->toArray());
    }
}
