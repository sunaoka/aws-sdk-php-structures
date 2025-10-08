<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteVolume;

trait DeleteVolumeTrait
{
    /**
     * @param DeleteVolumeRequest $args
     * @return DeleteVolumeResponse
     */
    public function deleteVolume(DeleteVolumeRequest $args)
    {
        $result = parent::deleteVolume($args->toArray());
        return new DeleteVolumeResponse($result->toArray());
    }
}
