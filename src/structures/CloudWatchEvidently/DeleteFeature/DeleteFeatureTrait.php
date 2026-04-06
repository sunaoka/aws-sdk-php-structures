<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteFeature;

trait DeleteFeatureTrait
{
    /**
     * @param DeleteFeatureRequest $args
     * @return DeleteFeatureResponse
     */
    public function deleteFeature(DeleteFeatureRequest $args)
    {
        $result = parent::deleteFeature($args->toArray());
        return new DeleteFeatureResponse($result->toArray());
    }
}
