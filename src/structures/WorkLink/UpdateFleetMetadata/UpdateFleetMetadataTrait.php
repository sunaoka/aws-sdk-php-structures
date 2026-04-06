<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateFleetMetadata;

trait UpdateFleetMetadataTrait
{
    /**
     * @param UpdateFleetMetadataRequest $args
     * @return UpdateFleetMetadataResponse
     */
    public function updateFleetMetadata(UpdateFleetMetadataRequest $args)
    {
        $result = parent::updateFleetMetadata($args->toArray());
        return new UpdateFleetMetadataResponse($result->toArray());
    }
}
