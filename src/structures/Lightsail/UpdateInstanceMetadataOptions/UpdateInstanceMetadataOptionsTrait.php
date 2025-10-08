<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateInstanceMetadataOptions;

trait UpdateInstanceMetadataOptionsTrait
{
    /**
     * @param UpdateInstanceMetadataOptionsRequest $args
     * @return UpdateInstanceMetadataOptionsResponse
     */
    public function updateInstanceMetadataOptions(UpdateInstanceMetadataOptionsRequest $args)
    {
        $result = parent::updateInstanceMetadataOptions($args->toArray());
        return new UpdateInstanceMetadataOptionsResponse($result->toArray());
    }
}
