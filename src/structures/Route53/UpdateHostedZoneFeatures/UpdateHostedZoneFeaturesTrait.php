<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneFeatures;

trait UpdateHostedZoneFeaturesTrait
{
    /**
     * @param UpdateHostedZoneFeaturesRequest $args
     * @return UpdateHostedZoneFeaturesResponse
     */
    public function updateHostedZoneFeatures(UpdateHostedZoneFeaturesRequest $args)
    {
        $result = parent::updateHostedZoneFeatures($args->toArray());
        return new UpdateHostedZoneFeaturesResponse($result->toArray());
    }
}
