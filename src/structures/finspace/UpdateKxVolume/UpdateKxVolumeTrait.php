<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxVolume;

trait UpdateKxVolumeTrait
{
    /**
     * @param UpdateKxVolumeRequest $args
     * @return UpdateKxVolumeResponse
     */
    public function updateKxVolume(UpdateKxVolumeRequest $args)
    {
        $result = parent::updateKxVolume($args->toArray());
        return new UpdateKxVolumeResponse($result->toArray());
    }
}
