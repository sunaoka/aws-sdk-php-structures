<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume;

trait UpdateVolumeTrait
{
    /**
     * @param UpdateVolumeRequest $args
     * @return UpdateVolumeResponse
     */
    public function updateVolume(UpdateVolumeRequest $args)
    {
        $result = parent::updateVolume($args->toArray());
        return new UpdateVolumeResponse($result->toArray());
    }
}
