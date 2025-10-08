<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateModelManifest;

trait CreateModelManifestTrait
{
    /**
     * @param CreateModelManifestRequest $args
     * @return CreateModelManifestResponse
     */
    public function createModelManifest(CreateModelManifestRequest $args)
    {
        $result = parent::createModelManifest($args->toArray());
        return new CreateModelManifestResponse($result->toArray());
    }
}
