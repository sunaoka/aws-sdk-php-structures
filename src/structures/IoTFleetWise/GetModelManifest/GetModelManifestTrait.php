<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetModelManifest;

trait GetModelManifestTrait
{
    /**
     * @param GetModelManifestRequest $args
     * @return GetModelManifestResponse
     */
    public function getModelManifest(GetModelManifestRequest $args)
    {
        $result = parent::getModelManifest($args->toArray());
        return new GetModelManifestResponse($result->toArray());
    }
}
