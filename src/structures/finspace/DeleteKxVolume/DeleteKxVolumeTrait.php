<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxVolume;

trait DeleteKxVolumeTrait
{
    /**
     * @param DeleteKxVolumeRequest $args
     * @return DeleteKxVolumeResponse
     */
    public function deleteKxVolume(DeleteKxVolumeRequest $args)
    {
        $result = parent::deleteKxVolume($args->toArray());
        return new DeleteKxVolumeResponse($result->toArray());
    }
}
