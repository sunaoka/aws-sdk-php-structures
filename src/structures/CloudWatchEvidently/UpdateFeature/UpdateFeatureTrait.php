<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateFeature;

trait UpdateFeatureTrait
{
    /**
     * @param UpdateFeatureRequest $args
     * @return UpdateFeatureResponse
     */
    public function updateFeature(UpdateFeatureRequest $args)
    {
        $result = parent::updateFeature($args->toArray());
        return new UpdateFeatureResponse($result->toArray());
    }
}
