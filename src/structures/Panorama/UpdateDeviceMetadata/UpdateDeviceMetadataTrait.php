<?php

namespace Sunaoka\Aws\Structures\Panorama\UpdateDeviceMetadata;

trait UpdateDeviceMetadataTrait
{
    /**
     * @param UpdateDeviceMetadataRequest $args
     * @return UpdateDeviceMetadataResponse
     */
    public function updateDeviceMetadata(UpdateDeviceMetadataRequest $args)
    {
        $result = parent::updateDeviceMetadata($args->toArray());
        return new UpdateDeviceMetadataResponse($result->toArray());
    }
}
