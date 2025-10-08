<?php

namespace Sunaoka\Aws\Structures\Organizations\EnableAllFeatures;

trait EnableAllFeaturesTrait
{
    /**
     * @param EnableAllFeaturesRequest $args
     * @return EnableAllFeaturesResponse
     */
    public function enableAllFeatures(EnableAllFeaturesRequest $args)
    {
        $result = parent::enableAllFeatures($args->toArray());
        return new EnableAllFeaturesResponse($result->toArray());
    }
}
