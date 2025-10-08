<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteModelManifest;

trait DeleteModelManifestTrait
{
    /**
     * @param DeleteModelManifestRequest $args
     * @return DeleteModelManifestResponse
     */
    public function deleteModelManifest(DeleteModelManifestRequest $args)
    {
        $result = parent::deleteModelManifest($args->toArray());
        return new DeleteModelManifestResponse($result->toArray());
    }
}
