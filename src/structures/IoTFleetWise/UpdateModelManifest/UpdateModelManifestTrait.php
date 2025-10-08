<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateModelManifest;

trait UpdateModelManifestTrait
{
    /**
     * @param UpdateModelManifestRequest $args
     * @return UpdateModelManifestResponse
     */
    public function updateModelManifest(UpdateModelManifestRequest $args)
    {
        $result = parent::updateModelManifest($args->toArray());
        return new UpdateModelManifestResponse($result->toArray());
    }
}
