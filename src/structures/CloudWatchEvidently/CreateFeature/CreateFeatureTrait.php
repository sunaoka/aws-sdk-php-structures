<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateFeature;

trait CreateFeatureTrait
{
    /**
     * @param CreateFeatureRequest $args
     * @return CreateFeatureResponse
     */
    public function createFeature(CreateFeatureRequest $args)
    {
        $result = parent::createFeature($args->toArray());
        return new CreateFeatureResponse($result->toArray());
    }
}
